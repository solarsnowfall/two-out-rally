<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError
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
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError query()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError whereStrikes($value)
 * @mixin \Eloquent
 */
class GroundballForceOutSafeAtFirstOnFielderChoiceAdvanceToSecondOnThrowingError extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
