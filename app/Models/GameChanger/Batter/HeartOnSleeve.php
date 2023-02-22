<?php

namespace App\Models\GameChanger\Batter;

use App\Models\GameChanger\BatterGameChanger;

/**
 * App\Models\GameChanger\Batter\HeartOnSleeve
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
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve query()
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HeartOnSleeve whereType($value)
 * @mixin \Eloquent
 */
class HeartOnSleeve extends BatterGameChanger
{

}
