<?php

namespace App\Sim\Fielding\Location;

use App\Models\Player\Pitcher;
use App\Modules\Chance;


class D2 extends FieldLocation
{
    public function fieldBall()
    {
        // Fielding logic goes here...
    }

    public function fielder(): ?Pitcher
    {
        return $this->game->pitcher();
    }
}
