<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\Sidearm
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
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sidearm whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class Sidearm extends PitcherGameChanger
{

}
