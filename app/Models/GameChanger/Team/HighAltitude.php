<?php

namespace App\Models\GameChanger\Team;

use App\Models\GameChanger\TeamGameChanger;

/**
 * App\Models\GameChanger\Team\HighAltitude
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
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude query()
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HighAltitude whereType($value)
 * @mixin \Eloquent
 */
class HighAltitude extends TeamGameChanger
{

}
