<?php

namespace App\Models\Team;

use App\Models\Player\Batter;
use App\Models\Player\Pitcher;
use App\Models\Player\Player;
use App\Models\Player\Position;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Team\TeamPlayer
 *
 * @property int $team_id
 * @property int $roster_position_id
 * @property int $player_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Player|null $player
 * @property-read \App\Models\Team\Team $team
 * @method static \Illuminate\Database\Eloquent\Builder|TeamPlayer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamPlayer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamPlayer query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamPlayer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamPlayer wherePlayerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamPlayer whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamPlayer whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamPlayer whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $id
 * @method static \Illuminate\Database\Eloquent\Builder|TeamPlayer whereId($value)
 * @property-read \App\Models\Team\RosterPosition|null $position
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
}
