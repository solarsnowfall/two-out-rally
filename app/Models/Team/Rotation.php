<?php

namespace App\Models\Team;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Team\Rotation
 *
 * @property int $id
 * @property int $team_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team\RotationPitcher[] $rotationPitchers
 * @property-read int|null $rotation_pitchers_count
 * @property-read \App\Models\Team\Team $team
 * @method static \Illuminate\Database\Eloquent\Builder|Rotation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rotation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rotation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rotation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rotation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rotation whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rotation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Rotation extends Model
{
    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function rotationPitchers()
    {
        return $this->hasMany(RotationPitcher::class);
    }

    public function pitcherInRotation(int $roster_position_id)
    {
        return  $this->rotationPitchers
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
