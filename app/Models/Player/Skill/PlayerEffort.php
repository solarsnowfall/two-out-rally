<?php

namespace App\Models\Player\Skill;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Parental\HasChildren;

/**
 * App\Models\Player\Skill\PlayerEffort
 *
 * @property int $id
 * @property string $type
 * @property string $level
 * @property string $name
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerEffort newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerEffort newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerEffort query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerEffort whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerEffort whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerEffort whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerEffort whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerEffort whereType($value)
 * @mixin \Eloquent
 */
class PlayerEffort extends Model
{
    use HasFactory;
    use HasChildren;

    const STEALING_NEVER = 1;
    const STEALING_CONSERVATIVE = 2;
    const STEALING_MODERATE = 4;
    const STEALING_AGGRESSIVE = 5;
    const STEALING_ALWAYS = 6;
    const PITCHING_VERY_LIGHT = 7;
    const PITCHING_LIGHT = 6;
    const PITCHING_NORMAL = 8;
    const PITCHING_STRONG = 9;
    const PITCHING_VERY_STRONG = 10;

    public $timestamps = false;

    protected $fillable = ['type', 'level', 'name', 'description'];

    /**
     * @return Builder[]|Collection|StealingEffort[]
     */
    public static function forBatters(): array|Collection
    {
        return static::whereType(addslashes(StealingEffort::class))->get();
    }

    /**
     * @return Builder[]|Collection|PitchingEffort[]
     */
    public static function forPitchers(): array|Collection
    {
        return static::whereType(addslashes(PitchingEffort::class))->get();
    }
}
