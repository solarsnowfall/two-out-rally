<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\Changeup
 *
 * @property int $id
 * @property string $type
 * @property string $category
 * @property mixed $bonus_type
 * @property int $rarity
 * @property int|null $roster_position_id
 * @property mixed|null $focus_id
 * @property int|null $player_personality_id
 * @property int|null $player_background_id
 * @property string $intangible
 * @property string $name
 * @property string $description
 * @property string $image
 * @property int $celebrity
 * @property int $rep
 * @property int $fitness
 * @property int $moxie
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup query()
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Changeup whereType($value)
 * @mixin \Eloquent
 */
class Changeup extends PitcherGameChanger
{

}
