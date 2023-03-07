<?php

namespace App\Sim\Fielding\Location;

use App\Models\Player\Batter;
use App\Modules\Chance;


class B6 extends FieldLocation
{
    public function fieldBall()
    {
        // Fielding logic goes here...
    }

    public function fielder(): ?Batter
    {
        return null;
    }
}
