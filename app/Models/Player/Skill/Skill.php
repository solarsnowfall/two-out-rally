<?php

namespace App\Models\Player\Skill;

use App\Models\Player\Batter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Player\Skill
 *
 * @property int $id
 * @property string $type
 * @property string $attribute
 * @property string $name
 * @property string $focus
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|Skill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill query()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereAttribute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereIsPitcher($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereName($value)
 * @mixin \Eloquent
 * @method static Builder|Skill whereFocus($value)
 * @method static Builder|Skill whereType($value)
 */
class Skill extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['type', 'attribute', 'name', 'focus', 'description'];

    /**
     * @return Skill[]|Builder[]|Collection
     */
    public static function batterSkills()
    {
        return static::where('type', '=', BatterSkill::class)->get();
    }

    /**
     * @return Skill[]|Builder[]|Collection
     */
    public static function pitcherSkills()
    {
        return static::where('type', '=', PitcherSkill::class)->get();
    }

    /**
     * @param string $class
     * @return Skill[]|Builder[]|Collection
     */
    public static function skillsFor(string $class)
    {
        return $class === Batter::class ? static::batterSkills() : static::pitcherSkills();
    }
}
