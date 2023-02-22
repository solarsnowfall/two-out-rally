<?php

namespace App\Models\GameChanger\Batter;

use App\Models\GameChanger\BatterGameChanger;

/**
 * App\Models\GameChanger\Batter\Clutch
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
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch query()
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clutch whereType($value)
 * @mixin \Eloquent
 */
class Clutch extends BatterGameChanger
{

}
