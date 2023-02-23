<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\Curveball
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
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball query()
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Curveball whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class Curveball extends PitcherGameChanger
{

}
