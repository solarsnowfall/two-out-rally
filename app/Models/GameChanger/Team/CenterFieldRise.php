<?php

namespace App\Models\GameChanger\Team;

use App\Models\GameChanger\TeamGameChanger;

/**
 * App\Models\GameChanger\Team\CenterFieldRise
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
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise query()
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CenterFieldRise whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class CenterFieldRise extends TeamGameChanger
{

}
