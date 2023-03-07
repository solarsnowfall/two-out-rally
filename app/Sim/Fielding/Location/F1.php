<?php

namespace App\Sim\Fielding\Location;

use App\Models\Player\Batter;
use App\Modules\Chance;


class F1 extends FieldLocation
{
    public function fieldBall()
    {
        // Fielding logic goes here...
    }

    public function fielder(): ?Batter
    {
        return $this->defensiveRange($this->game->firstBaseman(), 0.6, $this->game->secondBaseman(), 0.65); // first or second;
    }
}
