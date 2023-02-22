<?php

namespace App\Models\GameChanger\Team;

use App\Models\GameChanger\TeamGameChanger;

/**
 * App\Models\GameChanger\Team\MultipurposeStadium
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
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium query()
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MultipurposeStadium whereType($value)
 * @mixin \Eloquent
 */
class MultipurposeStadium extends TeamGameChanger
{

}
