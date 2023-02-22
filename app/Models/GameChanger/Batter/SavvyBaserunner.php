<?php

namespace App\Models\GameChanger\Batter;

use App\Models\GameChanger\BatterGameChanger;

/**
 * App\Models\GameChanger\Batter\SavvyBaserunner
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
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner query()
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavvyBaserunner whereType($value)
 * @mixin \Eloquent
 */
class SavvyBaserunner extends BatterGameChanger
{

}
