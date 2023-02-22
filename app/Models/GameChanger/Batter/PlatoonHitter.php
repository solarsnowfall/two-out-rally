<?php

namespace App\Models\GameChanger\Batter;

use App\Models\GameChanger\BatterGameChanger;

/**
 * App\Models\GameChanger\Batter\PlatoonHitter
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
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter query()
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PlatoonHitter whereType($value)
 * @mixin \Eloquent
 */
class PlatoonHitter extends BatterGameChanger
{

}
