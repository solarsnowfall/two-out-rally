<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\GroundballForceOutSafeAtFirstOnFielderChoice
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
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballForceOutSafeAtFirstOnFielderChoice whereStrikes($value)
 * @mixin \Eloquent
 */
class GroundballForceOutSafeAtFirstOnFielderChoice extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
