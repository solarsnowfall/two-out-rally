<?php

namespace App\Sim\Fielding;

use App\Models\Player\Batter;
use App\Modules\AtBat;
use App\Modules\Chance;
use App\Sim\Fielding\Location\FieldLocation;
use App\Sim\Game;

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
            return null;
        }

        return $this->forLocation()->fieldBall();
    }

    protected function forLocation(): FieldLocation
    {
        $location = strtoupper($this->atBat->hitLocation->getGridLocation());
        $class = "\\App\\Sim\\Fielding\\Location\\$location";

        return new $class($this->game, $this->atBat);
    }
}
