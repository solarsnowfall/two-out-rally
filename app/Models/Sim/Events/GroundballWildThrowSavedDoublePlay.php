<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\GroundballWildThrowSavedDoublePlay
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
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay query()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballWildThrowSavedDoublePlay whereStrikes($value)
 * @mixin \Eloquent
 */
class GroundballWildThrowSavedDoublePlay extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
