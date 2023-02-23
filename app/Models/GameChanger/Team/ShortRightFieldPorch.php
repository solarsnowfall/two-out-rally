<?php

namespace App\Models\GameChanger\Team;

use App\Models\GameChanger\TeamGameChanger;

/**
 * App\Models\GameChanger\Team\ShortRightFieldPorch
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
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortRightFieldPorch whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class ShortRightFieldPorch extends TeamGameChanger
{

}
