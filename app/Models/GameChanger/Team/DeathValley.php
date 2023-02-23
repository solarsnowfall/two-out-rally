<?php

namespace App\Models\GameChanger\Team;

use App\Models\GameChanger\TeamGameChanger;

/**
 * App\Models\GameChanger\Team\DeathValley
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
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeathValley whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class DeathValley extends TeamGameChanger
{

}
