<?php

namespace App\Models\GameChanger\Team;

use App\Models\GameChanger\TeamGameChanger;

/**
 * App\Models\GameChanger\Team\TheDome
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
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome query()
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TheDome whereType($value)
 * @mixin \Eloquent
 */
class TheDome extends TeamGameChanger
{

}
