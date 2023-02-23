<?php

namespace App\Models\Team;

use App\Models\Player\Pitcher;
use App\Modules\AveragePlayerSkills;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Team\Bullpen
 *
 * @property int $id
 * @property int $team_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team\BullpenPitcher[] $rotationPitchers
 * @property-read int|null $rotation_pitchers_count
 * @property-read \App\Models\Team\Team $team
 * @method static \Illuminate\Database\Eloquent\Builder|Bullpen newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bullpen newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bullpen query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bullpen whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bullpen whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bullpen whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bullpen whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team\BullpenPitcher[] $bullpenPitchers
 * @property-read int|null $bullpen_pitchers_count
 */
class Bullpen extends Model
{
    use HasFactory;

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var Pitcher[]
     */
    protected array $pitchers = [];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function pitchers(?int $roster_position_id = null): array|Pitcher
    {
        if (!count($this->pitchers)) {
            foreach ($this->bullpenPitchers as $bullpenPitcher) {
                $this->pitchers[$bullpenPitcher->roster_position_id] = $bullpenPitcher->pitcher;
            }
        }

        return $roster_position_id === null ? $this->pitchers : $this->pitchers[$roster_position_id];
    }

    public function bullpenPitchers()
    {
        return $this->hasMany(BullpenPitcher::class);
    }

    public function normalize()
    {
        $average = new AveragePlayerSkills($this->team->league, Pitcher::class);

        foreach ($this->pitchers() as $pitcher) {
            $pitcher->skill->normalize($average->skill);
        }
    }

    public function startingPitcher(int $game)
    {
        $game %= 4;
        return $this->pitchers(RosterPosition::STARTING_PITCHER1 + $game);
    }

    public function startingPitcher1(): Pitcher
    {
        return $this->pitchers(RosterPosition::STARTING_PITCHER1);
    }

    public function startingPitcher2(): Pitcher
    {
        return $this->pitchers(RosterPosition::STARTING_PITCHER2);
    }

    public function startingPitcher3(): Pitcher
    {
        return $this->pitchers(RosterPosition::STARTING_PITCHER3);
    }

    public function startingPitcher4(): Pitcher
    {
        return $this->pitchers(RosterPosition::STARTING_PITCHER4);
    }

    public function startingPitcher5(): Pitcher
    {
        return $this->pitchers(RosterPosition::STARTING_PITCHER5);
    }

    public function middleReliever1(): Pitcher
    {
        return $this->pitchers(RosterPosition::MIDDLE_RELIEF_PITCHER1);
    }

    public function middleReliever2(): Pitcher
    {
        return $this->pitchers(RosterPosition::MIDDLE_RELIEF_PITCHER2);
    }

    public function middleReliever3(): Pitcher
    {
        return $this->pitchers(RosterPosition::MIDDLE_RELIEF_PITCHER3);
    }

    public function middleReliever4(): Pitcher
    {
        return $this->pitchers(RosterPosition::MIDDLE_RELIEF_PITCHER4);
    }

    public function setupPitcher1(): Pitcher
    {
        return $this->pitchers(RosterPosition::SETUP_PITCHER1);
    }

    public function setupPitcher2(): Pitcher
    {
        return $this->pitchers(RosterPosition::SETUP_PITCHER2);
    }

    public function closingPitcher(): Pitcher
    {
        return $this->pitchers(RosterPosition::CLOSING_PITCHER);
    }
}
