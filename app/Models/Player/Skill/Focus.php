<?php

namespace App\Models\Player\Skill;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Parental\HasChildren;

/**
 * App\Models\Player\Skill\Focus
 *
 * @property int $id
 * @property string|null $type
 * @property int|null $strong_against
 * @property int|null $weak_against
 * @property string $name
 * @property string $abbrv
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|Focus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Focus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Focus query()
 * @method static \Illuminate\Database\Eloquent\Builder|Focus whereAbbrv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Focus whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Focus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Focus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Focus whereStrongAgainst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Focus whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Focus whereWeakAgainst($value)
 * @mixin \Eloquent
 */
class Focus extends Model
{
    use HasFactory;
    use HasChildren;

    const VISION = 1;
    const MUSCLE = 2;
    const ATHLETICISM = 3;
    const CONTROL = 4;
    const MOVEMENT = 5;
    const VELOCITY = 6;
    const BALANCED = 7;

    public $timestamps = false;

    protected $fillable = ['type', 'strong_against', 'weak_against', 'name', 'abbrv', 'description'];

    public function strongAgainst()
    {
        return $this->hasMany(Focus::class,'strong_against')->first();
    }

    public function weakAgainst()
    {
        return $this->hasMany(Focus::class,'weak_against')->first();
    }

    public function isStrongAgainst(Focus $focus)
    {
        return $this->strong_against === $focus->id;
    }

    public function isWeakAgainst(Focus $focus)
    {
        return $this->weak_against === $focus->id;
    }
}
