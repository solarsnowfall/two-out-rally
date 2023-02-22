<?php

namespace App\Models\GameChanger\Batter;

use App\Models\GameChanger\BatterGameChanger;

/**
 * App\Models\GameChanger\Batter\Gritty
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
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gritty whereType($value)
 * @mixin \Eloquent
 */
class Gritty extends BatterGameChanger
{

}
