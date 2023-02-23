<?php

namespace App\Models\GameChanger\Team;

use App\Models\GameChanger\TeamGameChanger;

/**
 * App\Models\GameChanger\Team\EvilEmpire
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
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire query()
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EvilEmpire whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class EvilEmpire extends TeamGameChanger
{

}
