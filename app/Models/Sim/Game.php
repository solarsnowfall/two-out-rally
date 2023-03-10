<?php

namespace App\Models\Sim;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Sim\Game
 *
 * @property int $id
 * @property int $series_id
 * @property int $away_id
 * @property int $home_id
 * @property int $winner_id
 * @property int $r_away
 * @property int $r_home
 * @property int $h_away
 * @property int $h_home
 * @property int $e_away
 * @property int $e_home
 * @property string $inning_runs
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Sim\GameEvent[] $events
 * @property-read int|null $events_count
 * @method static \Illuminate\Database\Eloquent\Builder|Game newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Game newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Game query()
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereAwayId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereEAway($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereEHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereHAway($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereHHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereHomeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereInningRuns($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereRAway($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereRHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereSeriesId($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereWinnerId($value)
 * @property int $away_team_id
 * @property int $home_team_id
 * @property int $ra
 * @property int $rh
 * @property int $ha
 * @property int $hh
 * @property int $ea
 * @property int $eh
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereAwayTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereEa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereEh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereHa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereHh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereHomeTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereRa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Game whereRh($value)
 */
class Game extends Model
{
    use HasFactory;

    public $timestamps = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function(Model $model) {
            $model->created_at = $model->freshTimestamp();
        });
    }

    public function events()
    {
        return $this->hasMany(GameEvent::class);
    }
}
