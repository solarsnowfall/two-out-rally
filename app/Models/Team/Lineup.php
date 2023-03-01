<?php

namespace App\Models\Team;

use App\Models\Player\Batter;
use App\Modules\AveragePlayerSkills;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use InvalidArgumentException;

/**
 * App\Models\Team\Lineup
 *
 * @property int $id
 * @property int $team_id
 * @property string|null $focus
 * @property string|null $handedness
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team\LineupBatter[] $lineupPlayers
 * @property-read int|null $lineup_players_count
 * @property-read \App\Models\Team\Team $team
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup query()
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup whereFocus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup whereHandedness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup whereTeamId($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team\LineupBatter[] $lineupBatters
 * @property-read int|null $lineup_batters_count
 */
class Lineup extends PlayerCollection
{
    use HasFactory;

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var int
     */
    protected int $batting_order = 0;

    /**
     * @var string
     */
    protected string $player_index = 'batting_order';

    /**
     * @param int|null $batting_order
     * @return Batter[]|Batter
     */
    public function batters(?int $batting_order = null): array|Batter
    {
        return $this->players($batting_order);
    }

    /**
     * @param Batter $batter
     * @return bool
     */
    public function hasBatter(Batter $batter): bool
    {
        return $this->hasPlayer($batter);
    }

    /**
     * @return HasMany|LineupBatter[]
     */
    public function lineupBatters(): HasMany|array
    {
       return $this->hasMany(LineupBatter::class);
    }

    public function currentBatter(): Batter
    {
        return $this->batters($this->batting_order);
    }

    /**
     * @return Batter
     */
    public function nextBatter(): Batter
    {
        $batter = $this->batters($this->batting_order);
        $this->batting_order += 10;
        $this->batting_order %= 9;

        return $batter;
    }

    public function reset()
    {
        $this->position = 0;
    }

    /**
     * @param int $roster_position_id
     * @return Batter
     */
    public function fielderForPosition(int $roster_position_id): Batter
    {
        if ($roster_position_id < RosterPosition::CATCHER || $roster_position_id > RosterPosition::RIGHT_FIELDER) {
            throw new InvalidArgumentException(
                "Invalid roster position supplied: $roster_position_id"
            );
        }

        foreach ($this->batters() as $batter) {
            if ($batter->rosterPosition->id === $roster_position_id) {
                break;
            }
        }

        return $batter;
    }

    public function catcher(): Batter
    {
        return $this->fielderForPosition(RosterPosition::CATCHER);
    }

    public function firstBaseman(): Batter
    {
        return $this->fielderForPosition(RosterPosition::FIRST_BASEMAN);
    }

    public function secondBaseman(): Batter
    {
        return $this->fielderForPosition(RosterPosition::SECOND_BASEMAN);
    }

    public function shortstop(): Batter
    {
        return $this->fielderForPosition(RosterPosition::SHORTSTOP);
    }

    public function thirdBaseman(): Batter
    {
        return $this->fielderForPosition(RosterPosition::THIRD_BASEMAN);
    }

    public function leftFielder(): Batter
    {
        return $this->fielderForPosition(RosterPosition::LEFT_FIELDER);
    }

    public function centerFielder(): Batter
    {
        return $this->fielderForPosition(RosterPosition::CENTER_FIELDER);
    }

    public function rightFielder(): Batter
    {
        return $this->fielderForPosition(RosterPosition::RIGHT_FIELDER);
    }
}
