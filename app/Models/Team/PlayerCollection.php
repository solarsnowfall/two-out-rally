<?php

namespace App\Models\Team;

use App\Models\Player\Batter;
use App\Models\Player\Pitcher;
use App\Models\Player\Player;
use App\Modules\AveragePlayerSkills;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\Diff\Line;

abstract class PlayerCollection extends Model
{
    /**
     * @var string
     */
    protected string $player_index = 'roster_position_id';

    /**
     * @var Batter[]|Pitcher[]
     */
    private array $players = [];

    /**
     * @var bool
     */
    private bool $normalized = false;

    /**
     * @var int[]
     */
    private array $substitutions = [];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * @return Batter[]|Pitcher[]|Batter|Pitcher
     */
    public function players(mixed $index = null)
    {
        if (empty($this->players)) {
            $this->players = $this instanceof Bullpen
                ? $this->getPitchers()
                : $this->getBatters();
        }

        return $index !== null ? $this->players[$index] : $this->players;
    }

    /**
     * @param Player $player
     * @return bool
     */
    public function hasPlayer(Player $player): bool
    {
        foreach ($this->players() as $p) {
            if ($p->id === $player->id) {
                return true;
            }
        }

        return false;
    }

    public function addSubstitution(RosterPosition $position)
    {
        $this->substitutions[$position->id] = true;
    }

    public function checkSubstitutionMade(RosterPosition $position)
    {
        return array_key_exists($position->id, $this->substitutions);
    }

    /**
     * @return void
     */
    public function normalize(): void
    {
        if ($this->normalized) {
            return;
        }

        $class = $this instanceof Lineup ? Batter::class : PItcher::class;
        $average = new AveragePlayerSkills($this->team->league, $class);

        /** @var Batter $batter */
        foreach ($this->players() as $player) {
            $player->skill->normalize($average->skill);
        }

        $this->normalized = true;
    }

    /**
     * @return Batter[]
     */
    private function getBatters(): array
    {
        $batters = [];
        /** @var Lineup $this */
        foreach ($this->lineupBatters as $lineupBatter) {
            $batters[$lineupBatter->{$this->player_index}] = $lineupBatter->player;
        }

        return $batters;
    }

    /**
     * @return Pitcher[]
     */
    private function getPitchers(): array
    {
        $pitchers = [];
        /** @var Bullpen $this */
        foreach ($this->bullpenPitchers as $bullpenPitcher) {
            $pitchers[$bullpenPitcher->{$this->player_index}] = $bullpenPitcher->player;
        }

        return $pitchers;
    }
}
