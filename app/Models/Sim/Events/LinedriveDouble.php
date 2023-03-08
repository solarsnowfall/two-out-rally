<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\LinedriveDouble
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
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble query()
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveDouble whereStrikes($value)
 * @mixin \Eloquent
 */
class LinedriveDouble extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
