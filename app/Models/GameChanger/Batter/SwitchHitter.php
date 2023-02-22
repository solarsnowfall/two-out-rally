<?php

namespace App\Models\GameChanger\Batter;

use App\Models\GameChanger\BatterGameChanger;

/**
 * App\Models\GameChanger\Batter\SwitchHitter
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
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter query()
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwitchHitter whereType($value)
 * @mixin \Eloquent
 */
class SwitchHitter extends BatterGameChanger
{

}
