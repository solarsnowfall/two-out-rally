<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\RunnerStealsSecond
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
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond query()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerStealsSecond whereStrikes($value)
 * @mixin \Eloquent
 */
class RunnerStealsSecond extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
