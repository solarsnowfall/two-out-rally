<?php

namespace App\Models\GameChanger\Batter;

use App\Models\GameChanger\BatterGameChanger;

/**
 * App\Models\GameChanger\Batter\TheBully
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
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully query()
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheBully whereType($value)
 * @mixin \Eloquent
 */
class TheBully extends BatterGameChanger
{

}
