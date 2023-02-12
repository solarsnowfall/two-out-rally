<?php

namespace App\Sim;

use App\Models\Matchup;
use App\Models\Sim\Game as GameModel;
use App\Models\Sim\Series as SeriesModel;

class Series
{
    protected SeriesModel $series;

    protected array $games = [];

    public function __construct(SeriesModel $series, Matchup $matchup)
    {
        $this->series = $series;
        $this->series->matchup_id = $matchup->id;
    }

    public function run()
    {
        for ($i=0; $i<$this->series->numGames(); $i++) {
            $this->games[] = new Game($this->series, new GameModel());
        }
    }

    public function gamesComplete()
    {
        if (empty($this->games)) {
            return false;
        }

        if ($this->series->day >= 34) {
            return count($this->games) === 5;
        }

        $wins_away = $wins_home = 0;

        foreach ($this->games as $game) {
            $game->away_id === $game->winner_id ? $wins_away++ : $wins_home++;
        }

        return $wins_away >= 4 || $wins_home >= 4;
    }
}
