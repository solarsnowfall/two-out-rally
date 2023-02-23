<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\TwelveSixCurveball
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
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball query()
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TwelveSixCurveball whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class TwelveSixCurveball extends PitcherGameChanger
{

}
