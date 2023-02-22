<?php

namespace App\Models\GameChanger\Batter;

use App\Models\GameChanger\BatterGameChanger;

/**
 * App\Models\GameChanger\Batter\SprayHitter
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
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter query()
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SprayHitter whereType($value)
 * @mixin \Eloquent
 */
class SprayHitter extends BatterGameChanger
{

}
