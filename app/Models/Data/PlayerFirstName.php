<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Data\PlayerFirstName
 *
 * @property int $id
 * @property string $name
 * @property int $chance
 * @property int $chance_low
 * @property int $chance_high
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerFirstName newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerFirstName newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerFirstName query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerFirstName whereChance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerFirstName whereChanceHigh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerFirstName whereChanceLow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerFirstName whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlayerFirstName whereName($value)
 * @mixin \Eloquent
 */
class PlayerFirstName extends Model
{
    const MAX_CHANCE = 2317884;

    use HasFactory;

    public static function randomName()
    {
        $chance = mt_rand(0, static::MAX_CHANCE);

        return self::where('chance_low', '<=', $chance)
            ->where('chance_high', '>', $chance)
            ->first(['name'])
            ->name;
    }
}
