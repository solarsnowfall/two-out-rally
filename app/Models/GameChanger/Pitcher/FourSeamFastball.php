<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\FourSeamFastball
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
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball query()
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FourSeamFastball whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class FourSeamFastball extends PitcherGameChanger
{

}
