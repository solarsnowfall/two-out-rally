<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\Forkball
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
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball query()
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Forkball whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class Forkball extends PitcherGameChanger
{

}
