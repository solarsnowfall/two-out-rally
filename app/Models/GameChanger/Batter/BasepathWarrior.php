<?php

namespace App\Models\GameChanger\Batter;

use App\Models\GameChanger\BatterGameChanger;

/**
 * App\Models\GameChanger\Batter\BasepathWarrior
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
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior query()
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasepathWarrior whereType($value)
 * @mixin \Eloquent
 */
class BasepathWarrior extends BatterGameChanger
{

}
