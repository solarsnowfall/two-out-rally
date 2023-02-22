<?php

namespace App\Models\GameChanger\Pitcher;

use App\Models\GameChanger\PitcherGameChanger;

/**
 * App\Models\GameChanger\Pitcher\Splitter
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
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter query()
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Splitter whereType($value)
 * @mixin \Eloquent
 */
class Splitter extends PitcherGameChanger
{

}
