<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\FlyBallFieldingError
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
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError query()
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallFieldingError whereStrikes($value)
 * @mixin \Eloquent
 */
class FlyBallFieldingError extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
