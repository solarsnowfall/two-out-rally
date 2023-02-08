<?php

namespace App\Models\Player;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Player\PlayerBackground
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerBackground newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerBackground newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerBackground query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerBackground whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerBackground whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerBackground whereName($value)
 * @mixin \Eloquent
 */
class PlayerBackground extends Model
{
    use HasFactory;

    const QUARTERBACK = 1;
    const PREP_SCHOOL = 2;
    const JAPANESE_HIGH_SCHOOL = 3;
    const STREET_PLAYER = 4;
    const TRACK_AND_FIELD = 5;
    const LATIN_ACADEMY_GRAD = 6;

    protected $fillable = ['name', 'description'];

    public static function randomId()
    {
        return mt_rand(static::QUARTERBACK, static::LATIN_ACADEMY_GRAD);
    }
}
