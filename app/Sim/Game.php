<?php

namespace App\Sim;

use App\Models\Matchup;
use App\Models\Sim\Game as GameModel;
use App\Models\Team\Team;

class Game
{
    protected Series $series;

    protected Team $away;

    protected Team $home;

    protected GameModel $game;

    protected int $inning = 1;

    protected int $runsHome;

    protected int $runsAway;

    protected int $outs = 0;

    public function __construct(Series $series)
    {
        $this->away = $away;
        $this->home = $home;
    }

    public function run()
    {
        $this->game = new GameModel([
            'series_id' => $this->
        ]);



        $this->game->save();
    }
}
