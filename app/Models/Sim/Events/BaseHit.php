<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\BaseHit
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
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseHit whereStrikes($value)
 * @mixin \Eloquent
 */
class BaseHit extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
