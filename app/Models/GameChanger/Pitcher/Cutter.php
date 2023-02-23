<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\Cutter
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
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cutter whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class Cutter extends PitcherGameChanger
{

}
