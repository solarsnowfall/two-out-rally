<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\EffectivelyWild
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
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild query()
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EffectivelyWild whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class EffectivelyWild extends PitcherGameChanger
{

}
