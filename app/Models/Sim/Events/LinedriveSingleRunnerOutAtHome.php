<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\LinedriveSingleRunnerOutAtHome
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
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome query()
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingleRunnerOutAtHome whereStrikes($value)
 * @mixin \Eloquent
 */
class LinedriveSingleRunnerOutAtHome extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
