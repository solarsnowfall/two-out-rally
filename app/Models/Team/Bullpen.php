<?php

namespace App\Models\Team;

use App\Models\Player\Pitcher;
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

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function bullpenPitchers()
    {
        return $this->hasMany(BullpenPitcher::class);
    }

    public function pitcherInRotation(int $roster_position_id)
    {
        return  $this->bullpenPitchers
                    ->where('roster_position_id', '=', $roster_position_id)
                    ->first()
                    ->pitcher;
    }

    public function startingPitcher(int $game)
    {
        $game %= 4;
        return $this->pitcherInRotation(RosterPosition::STARTING_PITCHER1 + $game);
    }

    public function startingPitcher1()
    {
        return $this->pitcherInRotation(RosterPosition::STARTING_PITCHER1);
    }

    public function startingPitcher2()
    {
        return $this->pitcherInRotation(RosterPosition::STARTING_PITCHER2);
    }

    public function startingPitcher3()
    {
        return $this->pitcherInRotation(RosterPosition::STARTING_PITCHER3);
    }

    public function startingPitcher4()
    {
        return $this->pitcherInRotation(RosterPosition::STARTING_PITCHER4);
    }

    public function startingPitcher5()
    {
        return $this->pitcherInRotation(RosterPosition::STARTING_PITCHER5);
    }

    public function middleReliever1()
    {
        return $this->pitcherInRotation(RosterPosition::MIDDLE_RELIEF_PITCHER1);
    }

    public function middleReliever2()
    {
        return $this->pitcherInRotation(RosterPosition::MIDDLE_RELIEF_PITCHER2);
    }

    public function middleReliever3()
    {
        return $this->pitcherInRotation(RosterPosition::MIDDLE_RELIEF_PITCHER3);
    }

    public function middleReliever4()
    {
        return $this->pitcherInRotation(RosterPosition::MIDDLE_RELIEF_PITCHER4);
    }

    public function setupPitcher1()
    {
        return $this->pitcherInRotation(RosterPosition::SETUP_PITCHER1);
    }

    public function setupPitcher2()
    {
        return $this->pitcherInRotation(RosterPosition::SETUP_PITCHER2);
    }

    public function closingPitcher()
    {
        return $this->pitcherInRotation(RosterPosition::CLOSING_PITCHER);
    }
}
