<?php

namespace App\Modules;

use App\Models\Player\Batter;
use App\Models\Team\Team;

class Lineup
{
    /**
     * @var Batter[]
     */
    protected array $batters;

    /**
     * @var int[]
     */
    protected array $order;

    /**
     * @var int
     */
    protected int $position = 0;

    /**
     * @var Team
     */
    protected Team $team;

    /**
     * @param Team $team
     */
    public function __construct(Team $team)
    {
        $this->team = $team;
        $this->order = $this->team->getDefaultLineup();

        /** @var Batter $batter */
        foreach ($this->team->batters as $batter) {
            $this->batters[$batter->rosterPosition->id] = $batter;
        }
    }

    /**
     * @return Batter
     */
    public function next(): Batter
    {
        $batter = $this->batters[$this->order[$this->position]];
        $this->position += 10;
        $this->position %= 9;

        return $batter;
    }
}
