<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\WpaCondition
 *
 * @property int $id
 * @property string $batting
 * @property int $inning
 * @property int $outs
 * @property int $first
 * @property int $second
 * @property int $third
 * @property string $down_by_five
 * @property string $down_by_four
 * @property string $down_by_three
 * @property string $down_by_two
 * @property string $down_by_one
 * @property string $tied
 * @property string $up_by_one
 * @property string $up_by_two
 * @property string $up_by_three
 * @property string $up_by_four
 * @property string $up_by_five
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition query()
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition whereBatting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition whereDownByFive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition whereDownByFour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition whereDownByOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition whereDownByThree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition whereDownByTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition whereFirst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition whereSecond($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition whereThird($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition whereTied($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition whereUpByFive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition whereUpByFour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition whereUpByOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition whereUpByThree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WpaCondition whereUpByTwo($value)
 * @mixin \Eloquent
 */
class WpaCondition extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'batting',
        'inning',
        'outs',
        'first',
        'second',
        'third',
        'down_by_five',
        'down_by_four',
        'down_by_three',
        'down_by_two',
        'down_by_one',
        'tied',
        'up_by_one',
        'up_by_two',
        'up_by_three',
        'up_by_four',
        'up_by_five'
    ];
}
