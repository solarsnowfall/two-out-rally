<?php

namespace App\Models\Sim;

use App\Models\Matchup;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * App\Models\Sim\Series
 *
 * @property int $id
 * @property int $season_id
 * @property int $day
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Sim\Game[] $games
 * @property-read int|null $games_count
 * @method static \Illuminate\Database\Eloquent\Builder|Series newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Series newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Series query()
 * @method static \Illuminate\Database\Eloquent\Builder|Series whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Series whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Series whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Series whereSeasonId($value)
 * @mixin \Eloquent
 * @property-read Matchup|null $matchup
 * @property int $matchup_id
 * @method static \Illuminate\Database\Eloquent\Builder|Series whereMatchupId($value)
 */
class Series extends Model
{
    use HasFactory;

    protected $table = 'series';
    public $timestamps = false;

    public function games()
    {
        return $this->hasMany(Game::class);
    }

    public function matchup()
    {
        return $this->belongsTo(Matchup::class);
    }

    public function numGames()
    {
        return $this->day < 34;
    }

    public function winsAway()
    {
        if (empty($this->games)) {
            return 0;
        }

        $wins = 0;

        foreach ($this->games as $game) {
            if ($game->away_id === $game->winner_id) {
                $wins++;
            }
        }

        return $wins;
    }

    public function winsHome()
    {
        if (empty($this->games)) {
            return 0;
        }

        $wins = 0;

        foreach ($this->games as $game) {
            if ($game->home_id === $game->winner_id) {
                $wins++;
            }
        }

        return $wins;
    }
}
