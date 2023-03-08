<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\RunnersAdvanceOnPassedBall
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
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall query()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnPassedBall whereStrikes($value)
 * @mixin \Eloquent
 */
class RunnersAdvanceOnPassedBall extends GameEvent
{
    use HasParent;
    public function getDescription(): string
    {
        // TODO: Implement getDescription() method.
    }
}
