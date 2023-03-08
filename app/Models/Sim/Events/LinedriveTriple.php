<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\LinedriveTriple
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
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple query()
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveTriple whereStrikes($value)
 * @mixin \Eloquent
 */
class LinedriveTriple extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
