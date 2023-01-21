<?php

namespace App\Models\Player;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Player\PlayerPersonality
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPersonality newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPersonality newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPersonality query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPersonality whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPersonality whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerPersonality whereName($value)
 * @mixin \Eloquent
 */
class PlayerPersonality extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public static function randomId(): int
    {
        return self::inRandomOrder()->first(['id'])->id;
    }
}
