<?php

namespace App\Models\GameChanger\Batter;

use App\Models\GameChanger\BatterGameChanger;

/**
 * App\Models\GameChanger\Batter\TakeOutSlide
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
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide query()
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TakeOutSlide whereType($value)
 * @mixin \Eloquent
 */
class TakeOutSlide extends BatterGameChanger
{

}
