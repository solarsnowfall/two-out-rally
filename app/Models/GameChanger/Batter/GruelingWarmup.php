<?php

namespace App\Models\GameChanger\Batter;

use App\Models\GameChanger\BatterGameChanger;

/**
 * App\Models\GameChanger\Batter\GruelingWarmup
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
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup query()
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GruelingWarmup whereType($value)
 * @mixin \Eloquent
 */
class GruelingWarmup extends BatterGameChanger
{

}
