<?php

namespace App\Models\GameChanger\Batter;

use App\Models\GameChanger\BatterGameChanger;

/**
 * App\Models\GameChanger\Batter\FiveToolPlayer
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
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer query()
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FiveToolPlayer whereType($value)
 * @mixin \Eloquent
 */
class FiveToolPlayer extends BatterGameChanger
{

}
