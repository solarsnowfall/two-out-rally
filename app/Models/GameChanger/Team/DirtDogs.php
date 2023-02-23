<?php

namespace App\Models\GameChanger\Team;

use App\Models\GameChanger\TeamGameChanger;

/**
 * App\Models\GameChanger\Team\DirtDogs
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
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs query()
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DirtDogs whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class DirtDogs extends TeamGameChanger
{

}
