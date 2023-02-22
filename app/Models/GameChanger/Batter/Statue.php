<?php

namespace App\Models\GameChanger\Batter;

use App\Models\GameChanger\BatterGameChanger;

/**
 * App\Models\GameChanger\Batter\Statue
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
 * @method static \Illuminate\Database\Eloquent\Builder|Statue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Statue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Statue query()
 * @method static \Illuminate\Database\Eloquent\Builder|Statue whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statue whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statue whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statue whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statue whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statue whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statue whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statue whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statue whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statue whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statue wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statue wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statue whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statue whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statue whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Statue whereType($value)
 * @mixin \Eloquent
 */
class Statue extends BatterGameChanger
{

}
