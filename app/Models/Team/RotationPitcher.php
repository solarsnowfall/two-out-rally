<?php

namespace App\Models\Team;

use App\Models\Player\Player;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Team\RotationPitcher
 *
 * @property int $id
 * @property int $rotation_id
 * @property int $player_id
 * @property int $roster_position_id
 * @property-read Player $player
 * @property-read \App\Models\Team\Rotation $rotation
 * @method static \Illuminate\Database\Eloquent\Builder|RotationPitcher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RotationPitcher newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RotationPitcher query()
 * @method static \Illuminate\Database\Eloquent\Builder|RotationPitcher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RotationPitcher wherePlayerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RotationPitcher whereRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RotationPitcher whereRotationId($value)
 * @mixin \Eloquent
 */
class RotationPitcher extends Model
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
        return $this->belongsTo(Rotation::class);
    }
}
