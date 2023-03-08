<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\FlyBallTwoBaseFieldingError
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
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError query()
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTwoBaseFieldingError whereStrikes($value)
 * @mixin \Eloquent
 */
class FlyBallTwoBaseFieldingError extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
