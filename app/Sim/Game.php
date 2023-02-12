<?php

namespace App\Sim;

use App\Models\Matchup;
use App\Models\Sim\Game as GameModel;
use App\Models\Sim\Series as SeriesModel;
use App\Models\Team\Team;

class Game
{
    protected SeriesModel $series;

    protected Team $away;

    protected Team $home;

    protected GameModel $game;

    protected int $inning = 1;

    protected int $runsHome;

    protected int $runsAway;

    protected int $outs = 0;

    protected int $side = 0;

    public function __construct(SeriesModel $series, GameModel $game)
    {
        $this->series = $series;
        $this->game = $game;
        $this->game->away_id = $this->series->matchup->away_id;
        $this->game->home_id = $this->series->matchup->home_id;
        $this->away = $this->series->matchup->awayTeam();
        $this->home = $this->series->matchup->homeTeam();
    }

    public function run()
    {
        while (!$this->gameComplete()) {

            while (!$this->inningComplete()) {

                while (!$this->sideComplete()) {




                }

                $this->side++;
            }

            $this->inning++;
        }


        $this->game->save();
    }

    protected function gameComplete()
    {
        return $this->inning <= 9;
    }

    protected function inningComplete()
    {
        return $this->side === 1 && $this->sideComplete();
    }

    protected function sideComplete()
    {
        return $this->outs === 3;
    }
}
