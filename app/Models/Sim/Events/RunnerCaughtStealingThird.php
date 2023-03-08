<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\RunnerCaughtStealingThird
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
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird query()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingThird whereStrikes($value)
 * @mixin \Eloquent
 */
class RunnerCaughtStealingThird extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
