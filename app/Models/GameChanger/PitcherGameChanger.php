<?php

namespace App\Models\GameChanger;

use Parental\HasParent;

/**
 * App\Models\GameChanger\PitcherGameChanger
 *
 * @property int $id
 * @property string $type
 * @property array $bonus_type
 * @property int $rarity
 * @property int $roster_position_id
 * @property array $focus_id
 * @property int $player_personality_id
 * @property int $player_background_id
 * @property string $intangible
 * @property string $name
 * @property string $description
 * @property string $image
 * @property int $celebrity
 * @property int $rep
 * @property int $fitness
 * @property int $moxie
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger query()
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger whereType($value)
 * @mixin \Eloquent
 * @property string $category
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherGameChanger whereCategory($value)
 */
class PitcherGameChanger extends GameChanger
{
    use HasParent;
}
