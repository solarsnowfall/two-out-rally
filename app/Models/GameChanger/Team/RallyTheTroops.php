<?php

namespace App\Models\GameChanger\Team;

use App\Models\GameChanger\TeamGameChanger;

/**
 * App\Models\GameChanger\Team\RallyTheTroops
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
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops query()
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RallyTheTroops whereType($value)
 * @mixin \Eloquent
 */
class RallyTheTroops extends TeamGameChanger
{

}
