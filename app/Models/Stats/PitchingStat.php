<?php

namespace App\Models\Stats;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Stats\PitchingStat
 *
 * @property int $id
 * @property int $player_id
 * @property int $team_id
 * @property int $season_id
 * @property int $active
 * @property int $w
 * @property int $l
 * @property int $gs
 * @property int $gf
 * @property int $cg
 * @property int $sho
 * @property int $sv
 * @property int $bs
 * @property int $ip
 * @property int $1ba
 * @property int $2ba
 * @property int $3ba
 * @property int $hra
 * @property int $ra
 * @property int $er
 * @property int $bba
 * @property int $ibba
 * @property int $so
 * @property int $hbpa
 * @property int $bk
 * @property int $wp
 * @property int $bf
 * @property int $pk
 * @property int $pt
 * @property int $sfa
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat query()
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat where1ba($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat where2ba($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat where3ba($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereBba($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereBf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereBk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereBs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereCg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereEr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereGf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereGs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereHbpa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereHra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereIbba($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereL($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat wherePk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat wherePlayerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat wherePt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereRa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereSeasonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereSfa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereSho($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereSo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereSv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereW($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingStat whereWp($value)
 * @mixin \Eloquent
 */
class PitchingStat extends Model
{
    use HasFactory;
}
