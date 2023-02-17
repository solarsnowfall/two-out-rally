<?php

namespace App\Models\Team;

use App\Models\Player\Batter;
use App\Models\Player\Pitcher;
use App\Models\Player\Player;
use App\Models\Player\Position;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;


/**
 * App\Models\Team\TeamPlayer
 *
 * @property int $id
 * @property int $team_id
 * @property int $roster_position_id
 * @property int $player_id
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Player|null $player
 * @property-read \App\Models\Team\RosterPosition|null $position
 * @property-read \App\Models\Team\Team $team
 * @method static Builder|TeamPlayer forTeam(\App\Models\Team\Team|int $team)
 * @method static Builder|TeamPlayer newModelQuery()
 * @method static Builder|TeamPlayer newQuery()
 * @method static Builder|TeamPlayer query()
 * @method static Builder|TeamPlayer whereActive($value)
 * @method static Builder|TeamPlayer whereCreatedAt($value)
 * @method static Builder|TeamPlayer whereId($value)
 * @method static Builder|TeamPlayer wherePlayerId($value)
 * @method static Builder|TeamPlayer whereRosterPositionId($value)
 * @method static Builder|TeamPlayer whereTeamId($value)
 * @method static Builder|TeamPlayer whereUpdatedAt($value)
 * @method static Builder|TeamPlayer withPosition(\App\Models\Team\RosterPosition|int $position)
 * @mixin \Eloquent
 */
class TeamPlayer extends Model
{
    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function player()
    {
        return $this->hasOne(Player::class, 'id', 'player_id');
    }

    public function position()
    {
        return $this->hasOne(RosterPosition::class, 'id', 'roster_position_id');
    }

    public function scopeForTeam(Builder $query, Team|int $team)
    {
        return $query->where('team_id', $team->id ?? $team);
    }

    public function scopeWithPosition(Builder $query, RosterPosition|int $position)
    {
        return $query->where('roster_position_id', $position->id ?? $position);
    }
}
