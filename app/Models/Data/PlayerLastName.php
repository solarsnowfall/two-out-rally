<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Data\PlayerLastName
 *
 * @property int $id
 * @property string $name
 * @property int $chance
 * @property int $chance_low
 * @property int $chance_high
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerLastName newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerLastName newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerLastName query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerLastName whereChance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerLastName whereChanceHigh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerLastName whereChanceLow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerLastName whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerLastName whereName($value)
 * @mixin \Eloquent
 */
class PlayerLastName extends Model
{
    const MAX_CHANCE = 361175;

    use HasFactory;

    public static function randomName()
    {
        $chance = mt_rand(0, static::MAX_CHANCE);

        $name = self::where('chance_low', '<', $chance)
            ->where('chance_high', '>=', $chance)
            ->first(['name']);

        return $name->name;
    }
}
