<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\GroundballToDoublePlay
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
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay query()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballToDoublePlay whereStrikes($value)
 * @mixin \Eloquent
 */
class GroundballToDoublePlay extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
