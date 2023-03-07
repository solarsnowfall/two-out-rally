<?php

namespace App\Sim\Fielding\Location;

use App\Models\Player\Batter;
use App\Modules\Chance;


class C5 extends FieldLocation
{
    public function fieldBall()
    {
        // Fielding logic goes here...
    }

    public function fielder(): ?Batter
    {
        return $this->defensiveRange($this->game->leftFielder(), 0.65, $this->game->centerFielder(), 0.8); // left or center;
    }
}
