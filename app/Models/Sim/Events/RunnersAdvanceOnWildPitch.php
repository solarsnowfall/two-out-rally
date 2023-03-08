<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

/**
 * App\Models\Sim\Events\RunnersAdvanceOnWildPitch
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
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch query()
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RunnersAdvanceOnWildPitch whereStrikes($value)
 * @mixin \Eloquent
 */
class RunnersAdvanceOnWildPitch extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        return 'Runners advance on wild pitch by ' . $this->pitcher->name;
    }
}
