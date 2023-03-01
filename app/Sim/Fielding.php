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
    }

    public function fieldBall()
    {
        if (!isset($this->atBat->hitLocation)) {
            dd($this->atBat);
        }

        switch ($this->atBat->hitLocation->getGridLocation()) {
            case 'a1':
                break;
        }
    }
}
