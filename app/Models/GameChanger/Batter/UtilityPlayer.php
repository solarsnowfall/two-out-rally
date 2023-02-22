<?php

namespace App\Models\GameChanger\Batter;

use App\Models\GameChanger\BatterGameChanger;

/**
 * App\Models\GameChanger\Batter\UtilityPlayer
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
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer query()
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityPlayer whereType($value)
 * @mixin \Eloquent
 */
class UtilityPlayer extends BatterGameChanger
{

}
