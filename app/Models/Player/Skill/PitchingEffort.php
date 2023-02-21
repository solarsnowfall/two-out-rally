<?php

namespace App\Models\Player\Skill;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Parental\HasParent;

/**
 * App\Models\Player\Skill\PitchingEffort
 *
 * @property int $id
 * @property string $type
 * @property string $level
 * @property string $name
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingEffort newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingEffort newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingEffort query()
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingEffort whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingEffort whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingEffort whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingEffort whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitchingEffort whereType($value)
 * @mixin \Eloquent
 */
class PitchingEffort extends PlayerEffort
{
    use HasFactory;
    use HasParent;
}
