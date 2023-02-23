<?php

namespace App\Models\GameChanger\Team;

use App\Models\GameChanger\TeamGameChanger;

/**
 * App\Models\GameChanger\Team\ShortLeftFieldPorch
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
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLeftFieldPorch whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class ShortLeftFieldPorch extends TeamGameChanger
{

}
