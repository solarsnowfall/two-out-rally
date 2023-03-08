<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\GroundballDropped
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
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped query()
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GroundballDropped whereStrikes($value)
 * @mixin \Eloquent
 */
class GroundballDropped extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
