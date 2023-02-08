<?php

namespace App\Models\Team;

use App\Models\League;
use App\Models\Player\Batter;
use App\Models\Player\Player;
use App\Models\Player\Position;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Team\Team
 *
 * @property int $id
 * @property int|null $user_id
 * @property int $league_id
 * @property string $division
 * @property string $sub_division
 * @property string $name
 * @property int $wins
 * @property int $losses
 * @property string $city
 * @property string $state
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team\TeamPlayer[] $roster
 * @property-read int|null $roster_count
 * @method static \Illuminate\Database\Eloquent\Builder|Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team query()
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereDivision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereLeagueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereLosses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereSubDivision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereWins($value)
 * @mixin \Eloquent
 * @property-read League $league
 * @property-read \Illuminate\Database\Eloquent\Collection|Player[] $players
 * @property-read int|null $players_count
 * @property array|null $default_lineup
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereDefaultLineup($value)
 */
class Team extends Model
{
    use HasFactory;

    protected $casts = [
        'default_lineup' => 'array'
    ];

    public function league()
    {
        return $this->belongsTo(League::class);
    }

    public function players()
    {
        return $this->hasManyThrough(
            Player::class,
            TeamPlayer::class,
            'team_id',
            'id',
            'id',
            'id'
        );
    }

    public function batters()
    {
        return $this->players()->where('players.position_id', '>', Position::PITCHER);
    }

    public function pitchers()
    {
        return $this->players()->where('players.position_id', '=', Position::PITCHER);
    }

    public function getDefaultLineup(): array
    {
        return json_decode($this->default_lineup, true);
    }
}
