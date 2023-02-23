<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\VulcanChange
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
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange query()
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VulcanChange whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class VulcanChange extends PitcherGameChanger
{

}
