<?php

namespace App\Sim\Fielding\Location;

use App\Models\Player\Batter;
use App\Modules\Chance;


class E5 extends FieldLocation
{
    public function fieldBall()
    {
        // Fielding logic goes here...
    }

    public function fielder(): ?Batter
    {
        return $this->defensiveRange($this->game->rightFielder(), 0.65, $this->game->centerFielder(), 0.8); // right or center;
    }
}
