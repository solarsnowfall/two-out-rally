<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\FlyBallTriple
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
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple query()
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallTriple whereStrikes($value)
 * @mixin \Eloquent
 */
class FlyBallTriple extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
