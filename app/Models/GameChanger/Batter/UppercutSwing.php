<?php

namespace App\Models\GameChanger\Batter;

use App\Models\GameChanger\BatterGameChanger;

/**
 * App\Models\GameChanger\Batter\UppercutSwing
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
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing query()
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UppercutSwing whereType($value)
 * @mixin \Eloquent
 */
class UppercutSwing extends BatterGameChanger
{

}
