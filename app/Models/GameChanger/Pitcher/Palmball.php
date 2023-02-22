<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\Palmball
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
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball query()
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Palmball whereType($value)
 * @mixin \Eloquent
 */
class Palmball extends PitcherGameChanger
{

}
