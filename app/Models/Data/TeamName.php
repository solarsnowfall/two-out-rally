<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Data\TeamName
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|TeamName newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamName newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamName query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamName whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamName whereName($value)
 * @mixin \Eloquent
 */
class TeamName extends Model
{
    use HasFactory;

    public static function randomName(): string
    {
        return self::inRandomOrder()->first(['name'])->name;
    }
}
