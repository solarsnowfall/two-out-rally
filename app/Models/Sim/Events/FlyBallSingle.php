<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\FlyBallSingle
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
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle query()
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallSingle whereStrikes($value)
 * @mixin \Eloquent
 */
class FlyBallSingle extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
