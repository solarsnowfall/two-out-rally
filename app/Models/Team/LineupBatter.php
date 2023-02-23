<?php

namespace App\Models\Team;

use App\Models\Player\Player;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Team\LineupBatter
 *
 * @property int $id
 * @property int $lineup_id
 * @property int $player_id
 * @property int $roster_position_id
 * @property int $batting_order
 * @property-read Player $player
 * @method static \Illuminate\Database\Eloquent\Builder|LineupBatter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LineupBatter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LineupBatter query()
 * @method static \Illuminate\Database\Eloquent\Builder|LineupBatter whereBattingOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineupBatter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineupBatter whereLineupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineupBatter wherePlayerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LineupBatter whereRosterPositionId($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Team\RosterPosition $rosterPosition
 */
class LineupBatter extends Model
{
    use HasFactory;

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function batter()
    {
        return $this->player();
    }

    public function rosterPosition()
    {
        return $this->belongsTo(RosterPosition::class);
    }
}
