<?php

namespace App\Models\Sim;

use App\Models\Player\Batter;
use App\Models\Player\Pitcher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Parental\HasChildren;


/**
 * App\Models\Sim\GameEvent
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
 * @property-read Batter $batter
 * @property-read Batter|null $fielder
 * @property-read \App\Models\Sim\Game $game
 * @property-read Pitcher $pitcher
 * @property-read Batter|null $secondFielder
 * @property-read Batter|null $thirdFielder
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent query()
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereBalls($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereBases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereBatterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereFielderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereFielderId2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereFielderId3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereFielders($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereHitLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereHitZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereLineScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent wherePitchCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent wherePitchLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent wherePitchSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent wherePitchType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent wherePitcherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereStrikeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereStrikes($value)
 * @mixin \Eloquent
 */
abstract class GameEvent extends Model
{
    use HasFactory;
    use HasChildren;

    public $timestamps = false;

    abstract public function getDescription(): string;

    /**
     * @return BelongsTo|Game
     */
    public function game(): BelongsTo|Game
    {
        return $this->belongsTo(Game::class);
    }

    /**
     * @return BelongsTo|Batter
     */
    public function batter(): BelongsTo|Batter
    {
        return $this->belongsTo(Batter::class);
    }

    /**
     * @return BelongsTo|Pitcher
     */
    public function pitcher(): BelongsTo|Pitcher
    {
        return $this->belongsTo(Pitcher::class);
    }

    /**
     * @return BelongsTo|Batter
     */
    public function fielder(): BelongsTo|Batter
    {
        return $this->belongsTo(Batter::class, 'fielder_id', 'id');
    }

    /**
     * @return BelongsTo|Batter
     */
    public function secondFielder(): BelongsTo|Batter
    {
        return $this->belongsTo(Batter::class, 'fielder_id2', 'id');
    }

    /**
     * @return BelongsTo|Batter
     */
    public function thirdFielder(): BelongsTo|Batter
    {
        return $this->belongsTo(Batter::class, 'fielder_id3', 'id');
    }
}
