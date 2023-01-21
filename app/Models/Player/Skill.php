<?php

namespace App\Models\Player;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Player\Skill
 *
 * @property int $id
 * @property int $is_pitcher
 * @property string $label
 * @property string $name
 * @property string $attribute
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
 */
class Skill extends Model
{
    use HasFactory;

    protected $fillable = ['is_pitcher', 'label', 'name', 'attribute', 'description'];
}
