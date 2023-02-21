<?php

namespace App\Models\Player\Skill;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Parental\HasParent;

/**
 * App\Models\Player\Skill\BatterFocus
 *
 * @property int $id
 * @property string|null $type
 * @property int|null $strong_against
 * @property int|null $weak_against
 * @property string $name
 * @property string $abbrv
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|BatterFocus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BatterFocus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BatterFocus query()
 * @method static \Illuminate\Database\Eloquent\Builder|BatterFocus whereAbbrv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterFocus whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterFocus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterFocus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterFocus whereStrongAgainst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterFocus whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterFocus whereWeakAgainst($value)
 * @mixin \Eloquent
 */
class BatterFocus extends Focus
{
    use HasFactory;
    use HasParent;
}
