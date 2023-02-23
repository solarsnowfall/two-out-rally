<?php

namespace App\Models\GameChanger\Team;

use App\Models\GameChanger\TeamGameChanger;

/**
 * App\Models\GameChanger\Team\TheLittleThings
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
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings query()
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheLittleThings whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class TheLittleThings extends TeamGameChanger
{

}
