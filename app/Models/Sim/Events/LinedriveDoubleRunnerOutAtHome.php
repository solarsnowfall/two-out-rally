<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\LinedriveDoubleRunnerOutAtHome
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
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome query()
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDoubleRunnerOutAtHome whereStrikes($value)
 * @mixin \Eloquent
 */
class LinedriveDoubleRunnerOutAtHome extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
