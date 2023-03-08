<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\Lineout
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
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout query()
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineout whereStrikes($value)
 * @mixin \Eloquent
 */
class Lineout extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
