<?php

namespace App\Models\GameChanger\Batter;

use App\Models\GameChanger\BatterGameChanger;

/**
 * App\Models\GameChanger\Batter\Gloveman
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
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gloveman whereType($value)
 * @mixin \Eloquent
 */
class Gloveman extends BatterGameChanger
{

}
