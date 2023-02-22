<?php

namespace App\Models\GameChanger\Team;

use App\Models\GameChanger\TeamGameChanger;

/**
 * App\Models\GameChanger\Team\TicketSellers
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
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers query()
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers whereBonusType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers whereCelebrity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers whereFitness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers whereFocusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers whereIntangible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers whereMoxie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers wherePlayerBackgroundId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers wherePlayerPersonalityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers whereRarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TicketSellers whereType($value)
 * @mixin \Eloquent
 */
class TicketSellers extends TeamGameChanger
{

}
