<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\GroundballTwoBaseThrowingError
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
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError query()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballTwoBaseThrowingError whereStrikes($value)
 * @mixin \Eloquent
 */
class GroundballTwoBaseThrowingError extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
