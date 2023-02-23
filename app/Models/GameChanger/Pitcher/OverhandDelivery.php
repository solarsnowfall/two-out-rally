<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\OverhandDelivery
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
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery query()
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OverhandDelivery whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class OverhandDelivery extends PitcherGameChanger
{

}
