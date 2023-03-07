<?php

namespace App\Sim;

class StealAttempt
{
    public Game $game;

    public function __construct(Game $game)
    {
        $this->game = $game;
    }


}
