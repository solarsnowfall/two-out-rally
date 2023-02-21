<?php

namespace App\Sim;

use App\Models\Player\Player;
use App\Models\Stats\OffensiveStat;
use App\Models\Team\Team;

class OffensiveStats extends StatContainer
{
    protected string $class = OffensiveStat::class;

    /**
     * @var OffensiveStat[]
     */
    protected array $stats = [];

    /**
     * @param Player $player
     * @return OffensiveStat
     */
    public function forPlayer(Player $player): OffensiveStat
    {
        return parent::forPlayer($player);
    }

    protected function players(string $side): array
    {
        $players = [];
        /** @var Team $team */
        $team = $side === 'away' ? $this->game->away : $this->game->home;

        foreach ($team->batters() as $batter) {
            $players[] = $batter;
        }

        return $players;
    }
}
