<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\GroundballThrowingError
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
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError query()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballThrowingError whereStrikes($value)
 * @mixin \Eloquent
 */
class GroundballThrowingError extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
