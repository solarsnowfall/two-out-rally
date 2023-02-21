<?php

namespace App\Models\Player\Skill;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Parental\HasParent;

/**
 * App\Models\Player\Skill\StealingEffort
 *
 * @property int $id
 * @property string $type
 * @property string $level
 * @property string $name
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|StealingEffort newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StealingEffort newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StealingEffort query()
 * @method static \Illuminate\Database\Eloquent\Builder|StealingEffort whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StealingEffort whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StealingEffort whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StealingEffort whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StealingEffort whereType($value)
 * @mixin \Eloquent
 */
class StealingEffort extends PlayerEffort
{
    use HasFactory;
    use HasParent;
}
