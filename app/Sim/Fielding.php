<?php

namespace App\Sim;

use App\Models\Team\Lineup;
use App\Modules\AtBat;

class Fielding
{
    public AtBat $atBat;
    public Game $game;

    public function __construct(Game $game, AtBat $atBat)
    {
        $this->game = $game;
        $this->atBat = $atBat;
        $this->fieldBall();
    }

    public function fieldBall()
    {
        switch ($this->atBat->hitLocation->getGridLocation()) {
            case 'a1':

        }
    }
}
