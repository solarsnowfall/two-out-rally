<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\Screwball
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
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball query()
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Screwball whereType($value)
 * @mixin \Eloquent
 */
class Screwball extends PitcherGameChanger
{

}
