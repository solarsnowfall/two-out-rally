<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\Walk
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
 * @method static \Illuminate\Database\Eloquent\Builder|Walk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Walk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Walk query()
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Walk whereStrikes($value)
 * @mixin \Eloquent
 */
class Walk extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        return $this->batter->name . ' walked';
    }
}
