<?php

namespace App\Models\GameChanger;

use Parental\HasParent;

/**
 * App\Models\GameChanger\BatterGameChanger
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
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger query()
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger whereType($value)
 * @mixin \Eloquent
 * @property string $category
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 * @method static \Illuminate\Database\Eloquent\Builder|BatterGameChanger whereCategory($value)
 */
class BatterGameChanger extends GameChanger
{
    use HasParent;
}
