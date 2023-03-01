<?php

namespace App\Models\Team;

use App\Models\Player\Batter;

class Bench
{
    protected array $batters = [];

    public function __construct(Team $team, Lineup $lineup)
    {
        foreach ($team->batters() as $batter) {
            if (!$lineup->hasBatter($batter)) {
                $this->batters[] = $batter;
            }
        }
    }

    public function batter(int $index): Batter
    {
        $index %= 3;
        return $this->batters[$index];
    }
}
