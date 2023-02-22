<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\CircleChange
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
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange query()
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CircleChange whereType($value)
 * @mixin \Eloquent
 */
class CircleChange extends PitcherGameChanger
{

}
