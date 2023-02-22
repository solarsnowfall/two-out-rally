<?php

namespace App\Models\GameChanger\Batter;

use App\Models\GameChanger\BatterGameChanger;

/**
 * App\Models\GameChanger\Batter\Cannon
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
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cannon whereType($value)
 * @mixin \Eloquent
 */
class Cannon extends BatterGameChanger
{

}
