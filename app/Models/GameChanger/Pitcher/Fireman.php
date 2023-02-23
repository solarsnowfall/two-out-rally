<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\Fireman
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
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman query()
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fireman whereType($value)
 * @mixin \Eloquent
 * @property-read \App\Models\GameChanger\BatterSkill|null $batterSkill
 * @property-read \App\Models\GameChanger\PitcherSkill|null $pitcherSkill
 * @property-read \App\Models\Player\PlayerBackground|null $playerBackground
 * @property-read \App\Models\Player\PlayerPersonality|null $playerPersonality
 * @property-read \App\Models\Team\RosterPosition|null $position
 */
class Fireman extends PitcherGameChanger
{

}
