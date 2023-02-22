<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\Slider
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
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider query()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereType($value)
 * @mixin \Eloquent
 */
class Slider extends PitcherGameChanger
{

}
