<?php

namespace App\Models\Stats;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Stats\OffensiveStat
 *
 * @property int $id
 * @property int $player_id
 * @property int $team_id
 * @property int $season_id
 * @property int $active
 * @property int $pa
 * @property int $1b
 * @property int $2b
 * @property int $3b
 * @property int $hr
 * @property int $r
 * @property int $rbi
 * @property int $sb
 * @property int $cs
 * @property int $k
 * @property int $bb
 * @property int $hbp
 * @property int $sh
 * @property int $sf
 * @property int $ibb
 * @property int $gdp
 * @property int $ld
 * @property int $fp
 * @property int $gb
 * @property int $pop
 * @property int $ps
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat query()
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat where1b($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat where2b($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat where3b($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereBb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereCs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereFp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereGb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereGdp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereHbp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereHr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereIbb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereK($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereLd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat wherePa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat wherePlayerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat wherePop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat wherePs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereRbi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereSb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereSeasonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereSf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereSh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffensiveStat whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OffensiveStat extends Model
{
    use HasFactory;
}
