<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\KnuckleCurve
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
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve query()
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KnuckleCurve whereType($value)
 * @mixin \Eloquent
 */
class KnuckleCurve extends PitcherGameChanger
{

}
