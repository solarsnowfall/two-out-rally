<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\Oogy
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
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy query()
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Oogy whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class Oogy extends PitcherGameChanger
{

}
