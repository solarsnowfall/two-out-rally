<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\Slurve
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
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve query()
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slurve whereType($value)
 * @mixin \Eloquent
 */
class Slurve extends PitcherGameChanger
{

}
