<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\Knuckleball
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
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball query()
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Knuckleball whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class Knuckleball extends PitcherGameChanger
{

}
