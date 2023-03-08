<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\BatterHitByPitch
 *
 * @property int $id
 * @property int $game_id
 * @property int $inning
 * @property string $batting
 * @property string $outs
 * @property string $line_score
 * @property int $batter_id
 * @property int $pitcher_id
 * @property int|null $fielder_id
 * @property int|null $fielder_id2
 * @property int|null $fielder_id3
 * @property string $fielders
 * @property string $at_bat
 * @property int $pitch_count
 * @property string|null $pitch_location
 * @property string $pitch_type
 * @property int|null $pitch_speed
 * @property int $balls
 * @property int $strikes
 * @property string $strike_type
 * @property string|null $hit_type
 * @property string|null $hit_zone
 * @property string|null $hit_location
 * @property string|null $base_progress
 * @property string $bases
 * @property-read \App\Models\Player\Batter $batter
 * @property-read \App\Models\Player\Batter|null $fielder
 * @property-read \App\Models\Sim\Game $game
 * @property-read \App\Models\Player\Pitcher $pitcher
 * @property-read \App\Models\Player\Batter|null $secondFielder
 * @property-read \App\Models\Player\Batter|null $thirdFielder
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch query()
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterHitByPitch whereStrikes($value)
 * @mixin \Eloquent
 */
class BatterHitByPitch extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        return $this->batter->name . ' hit by pitch';
    }
}
