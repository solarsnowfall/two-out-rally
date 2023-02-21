<?php

namespace App\Sim;

use App\Models\Matchup;
use App\Models\Season;
use App\Models\Sim\Game as GameModel;
use App\Models\Sim\Series as SeriesModel;
use App\Sim\Traits\HasModel;
use Illuminate\Support\Facades\DB;

/**
 * @property SeriesModel $series
 */
class Series
{
    use HasModel;

    protected Matchup $matchup;

    protected Season $season;

    protected int $game = 0;

    protected array $games = [];

    public function __construct(Season $season, SeriesModel $series, Matchup $matchup)
    {
        $this->season = $season;
        $this->series = $series;
        $this->matchup = $matchup;

        $this->series->day = $this->season->day;
        $this->series->season_id = $this->season->id;
        $this->series->matchup_id = $matchup->id;
    }

    public function run()
    {
        while (!$this->gamesComplete()) {
            $this->games[$this->game] = new Game($this->series, new GameModel(), $this->game);
            $this->games[$this->game]->run();
            $this->game++;
        }

        echo "<br />Series Complete<br />";
    }

    public function save()
    {
        $this->series->save();

        foreach ($this->games as $game) {
            $game->save();
        }
    }

    public function gamesComplete()
    {
        if (empty($this->games)) {
            return false;
        }

        if ($this->series->day <= 34) {
            return count($this->games) === 5;
        }

        $wins_away = $wins_home = 0;

        foreach ($this->games as $game) {
            $game->game->away_id === $game->game->winner_id ? $wins_away++ : $wins_home++;
        }

        return $wins_away >= 4 || $wins_home >= 4;
    }
}
