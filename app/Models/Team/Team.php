<?php

namespace App\Models\Team;

use App\Models\League;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Team\Team
 *
 * @property int $id
 * @property int|null $user_id
 * @property int $league_id
 * @property string $division
 * @property string $sub_division
 * @property string $name
 * @property int $wins
 * @property int $losses
 * @property string $city
 * @property string $state
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team\TeamPlayer[] $roster
 * @property-read int|null $roster_count
 * @method static \Illuminate\Database\Eloquent\Builder|Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team query()
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereDivision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereLeagueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereLosses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereSubDivision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereWins($value)
 * @mixin \Eloquent
 */
class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    public function league()
    {
        $this->belongsTo(League::class);
    }

    public function roster()
    {
        return $this->hasMany(TeamPlayer::class);
    }
}
