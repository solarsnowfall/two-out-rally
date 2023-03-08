<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\RunnerStealsThird
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
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird query()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsThird whereStrikes($value)
 * @mixin \Eloquent
 */
class RunnerStealsThird extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
