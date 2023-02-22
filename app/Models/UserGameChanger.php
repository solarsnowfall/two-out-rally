<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserGameChanger
 *
 * @property int $id
 * @property int $user_id
 * @property int $game_changer_id
 * @property int|null $player_id
 * @method static \Illuminate\Database\Eloquent\Builder|UserGameChanger newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserGameChanger newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserGameChanger query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserGameChanger whereGameChangerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserGameChanger whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserGameChanger wherePlayerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserGameChanger whereUserId($value)
 * @mixin \Eloquent
 */
class UserGameChanger extends Model
{
    use HasFactory;
}
