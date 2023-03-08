<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\GroundballInfieldSingle
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
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle query()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballInfieldSingle whereStrikes($value)
 * @mixin \Eloquent
 */
class GroundballInfieldSingle extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
