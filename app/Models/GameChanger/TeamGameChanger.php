<?php

namespace App\Models\GameChanger;

use Parental\HasParent;

/**
 * App\Models\GameChanger\TeamGameChanger
 *
 * @property int $id
 * @property string $type
 * @property array $bonus_type
 * @property int $rarity
 * @property int $roster_position_id
 * @property array $focus_id
 * @property int $player_personality_id
 * @property int $player_background_id
 * @property string $intangible
 * @property string $name
 * @property string $description
 * @property string $image
 * @property int $celebrity
 * @property int $rep
 * @property int $fitness
 * @property int $moxie
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger whereType($value)
 * @mixin \Eloquent
 * @property string $category
 * @method static \Illuminate\Database\Eloquent\Builder|TeamGameChanger whereCategory($value)
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class TeamGameChanger extends GameChanger
{
    use HasParent;
}
