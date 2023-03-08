<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\LinedriveSingle
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
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle query()
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LinedriveSingle whereStrikes($value)
 * @mixin \Eloquent
 */
class LinedriveSingle extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
