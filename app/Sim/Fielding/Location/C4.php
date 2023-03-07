<?php

namespace App\Sim\Fielding\Location;

use App\Models\Player\Batter;
use App\Modules\Chance;


class C4 extends FieldLocation
{
    public function fieldBall()
    {
        // Fielding logic goes here...
    }

    public function fielder(): ?Batter
    {
        return $this->defensiveRange($this->game->centerFielder(), 0.65, $this->game->leftFielder(), 0.8); // center or left;
    }
}
