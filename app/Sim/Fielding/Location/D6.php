<?php

namespace App\Sim\Fielding\Location;

use App\Models\Player\Batter;
use App\Modules\Chance;


class D6 extends FieldLocation
{
    public function fieldBall()
    {
        // Fielding logic goes here...
    }

    public function fielder(): ?Batter
    {
        return $this->game->centerFielder();
    }
}
