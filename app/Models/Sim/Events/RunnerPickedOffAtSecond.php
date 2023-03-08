<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\RunnerPickedOffAtSecond
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
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond query()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnerPickedOffAtSecond whereStrikes($value)
 * @mixin \Eloquent
 */
class RunnerPickedOffAtSecond extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
