<?php

namespace App\Models\Sim;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Sim\GameEvent
 *
 * @property int $id
 * @property int $game_id
 * @property int $inning
 * @property string $batting
 * @property string $at_bat
 * @property string|null $hit_type
 * @property string $fielding
 * @property string|null $hit_vector
 * @property string|null $base_progress
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent query()
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereAtBat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereBaseProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereFielding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereHitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereHitVector($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GameEvent whereInning($value)
 * @mixin \Eloquent
 */
class GameEvent extends Model
{
    use HasFactory;
}
