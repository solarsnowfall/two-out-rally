<?php

namespace App\Sim\Fielding\Location;

use App\Models\Player\Batter;
use App\Modules\Chance;


class E3 extends FieldLocation
{
    public function fieldBall()
    {
        // Fielding logic goes here...
    }

    public function fielder(): ?Batter
    {
        return $this->defensiveRange($this->game->centerFielder(), 0.45, $this->game->rightFielder(), 0.65); // center or right;
    }
}
