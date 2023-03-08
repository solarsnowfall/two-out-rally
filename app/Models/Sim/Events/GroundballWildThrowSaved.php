<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\GroundballWildThrowSaved
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
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved query()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSaved whereStrikes($value)
 * @mixin \Eloquent
 */
class GroundballWildThrowSaved extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
