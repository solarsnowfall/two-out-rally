<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\Sinker
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
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sinker whereType($value)
 * @mixin \Eloquent
 */
class Sinker extends PitcherGameChanger
{

}
