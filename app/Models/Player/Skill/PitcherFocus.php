<?php

namespace App\Models\Player\Skill;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Parental\HasParent;

/**
 * App\Models\Player\Skill\PitcherFocus
 *
 * @property int $id
 * @property string|null $type
 * @property int|null $strong_against
 * @property int|null $weak_against
 * @property string $name
 * @property string $abbrv
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherFocus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherFocus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherFocus query()
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherFocus whereAbbrv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherFocus whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherFocus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherFocus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherFocus whereStrongAgainst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherFocus whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherFocus whereWeakAgainst($value)
 * @mixin \Eloquent
 */
class PitcherFocus extends Focus
{
    use HasFactory;
    use HasParent;
}
