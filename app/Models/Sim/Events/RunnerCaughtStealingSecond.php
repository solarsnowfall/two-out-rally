<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\RunnerCaughtStealingSecond
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
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond query()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerCaughtStealingSecond whereStrikes($value)
 * @mixin \Eloquent
 */
class RunnerCaughtStealingSecond extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
