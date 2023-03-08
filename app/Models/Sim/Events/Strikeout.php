<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\Strikeout
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
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout query()
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Strikeout whereStrikes($value)
 * @mixin \Eloquent
 */
class Strikeout extends GameEvent
{
    use HasParent;


    public function getDescription(): string
    {
        return $this->batter->name . ' struck out';
    }
}
