<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\Popup
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
 * @method static \Illuminate\Database\Eloquent\Builder|Popup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Popup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Popup query()
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Popup whereStrikes($value)
 * @mixin \Eloquent
 */
class Popup extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
