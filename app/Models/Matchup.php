<?php

namespace App\Models;

use App\Models\Team\Team;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Matchup
 *
 * @property int $id
 * @property int $day
 * @property int $away_offset
 * @property int $home_offset
 * @method static \Illuminate\Database\Eloquent\Builder|Matchup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Matchup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Matchup query()
 * @method static \Illuminate\Database\Eloquent\Builder|Matchup whereAwayOffset($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matchup whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matchup whereHomeOffset($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matchup whereId($value)
 * @mixin \Eloquent
 * @property int $league_id
 * @property int $away_id
 * @property int $home_id
 * @property-read Team|null $awayTeam
 * @property-read Team|null $homeTeam
 * @method static \Illuminate\Database\Eloquent\Builder|Matchup whereAwayId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matchup whereHomeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matchup whereLeagueId($value)
 */
class Matchup extends Model
{
    use HasFactory;

    public function awayTeam()
    {
        return $this->hasOne(Team::class, 'id', 'away_id');
    }

    public function homeTeam()
    {
        return $this->hasOne(Team::class, 'id', 'home_id');
    }
}
