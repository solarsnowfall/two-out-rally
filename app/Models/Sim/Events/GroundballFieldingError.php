<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\GroundballFieldingError
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
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError query()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballFieldingError whereStrikes($value)
 * @mixin \Eloquent
 */
class GroundballFieldingError extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
