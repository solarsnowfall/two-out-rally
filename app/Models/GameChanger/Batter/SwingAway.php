<?php

namespace App\Models\GameChanger\Batter;

use App\Models\GameChanger\BatterGameChanger;

/**
 * App\Models\GameChanger\Batter\SwingAway
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
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway query()
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SwingAway whereType($value)
 * @mixin \Eloquent
 */
class SwingAway extends BatterGameChanger
{

}
