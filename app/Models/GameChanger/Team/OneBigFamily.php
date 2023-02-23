<?php

namespace App\Models\GameChanger\Team;

use App\Models\GameChanger\TeamGameChanger;

/**
 * App\Models\GameChanger\Team\OneBigFamily
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
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily query()
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OneBigFamily whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class OneBigFamily extends TeamGameChanger
{

}
