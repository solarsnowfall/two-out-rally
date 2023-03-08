<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\FlyBallDouble
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
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble query()
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FlyBallDouble whereStrikes($value)
 * @mixin \Eloquent
 */
class FlyBallDouble extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        return $this->batter->name . ' hit a flyball to ';
    }
}
