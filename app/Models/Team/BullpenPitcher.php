<?php

namespace App\Models\Team;

use App\Models\Player\Player;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Team\BullpenPitcher
 *
 * @property int $id
 * @property int $rotation_id
 * @property int $player_id
 * @property int $roster_position_id
 * @property-read Player $player
 * @property-read \App\Models\Team\Bullpen $rotation
 * @method static \Illuminate\Database\Eloquent\Builder|BullpenPitcher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BullpenPitcher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BullpenPitcher query()
 * @method static \Illuminate\Database\Eloquent\Builder|BullpenPitcher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BullpenPitcher wherePlayerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BullpenPitcher whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BullpenPitcher whereRotationId($value)
 * @mixin \Eloquent
 * @property int $bullpen_id
 * @method static \Illuminate\Database\Eloquent\Builder|BullpenPitcher whereBullpenId($value)
 */
class BullpenPitcher extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function pitcher()
    {
        return $this->player();
    }

    public function rotation()
    {
        return $this->belongsTo(Bullpen::class);
    }
}
