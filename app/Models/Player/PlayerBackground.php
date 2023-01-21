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

    protected $fillable = ['name', 'description'];

    public static function randomId()
    {
        return self::inRandomOrder()->first(['id'])->id;
    }
}
