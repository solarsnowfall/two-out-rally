<?php

namespace App\Models\Stats;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Stats\DefensiveStat
 *
 * @property int $id
 * @property int $game_id
 * @property int $player_id
 * @property int $team_id
 * @property int $season_id
 * @property int $active
 * @property int $g
 * @property int $err
 * @property int $po
 * @property int $a
 * @property int $dp
 * @property int $pb
 * @property float $wpa
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DefensiveStat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DefensiveStat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DefensiveStat query()
 * @method static \Illuminate\Database\Eloquent\Builder|DefensiveStat whereA($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefensiveStat whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefensiveStat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefensiveStat whereDp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefensiveStat whereErr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefensiveStat whereG($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefensiveStat whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefensiveStat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefensiveStat wherePb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefensiveStat wherePlayerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefensiveStat wherePo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefensiveStat whereSeasonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefensiveStat whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefensiveStat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefensiveStat whereWpa($value)
 * @mixin \Eloquent
 */
class DefensiveStat extends Model
{
    use HasFactory;

    protected $fillable = ['game_id', 'player_id', 'team_id', 'season_id'];
}
