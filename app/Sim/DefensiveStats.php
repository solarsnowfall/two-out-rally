<?php

namespace App\Sim;

use App\Models\Player\Player;
use App\Models\Stats\DefensiveStat;
use App\Models\Team\Team;

class DefensiveStats extends StatContainer
{


    protected string $class = DefensiveStat::class;

    /**
     * @var DefensiveStat[]
     */
    protected array $stats = [];

    /**
     * @param Player $player
     * @return DefensiveStat
     */
    public function forPlayer(Player $player): DefensiveStat
    {
        return parent::forPlayer($player);
    }

    protected function players(string $side): array
    {
        $players = [];
        /** @var Team $team */
        $team = $side === 'away' ? $this->game->away : $this->game->home;

        foreach ($team->players as $player) {
            $players[] = $player;
        }

        return $players;
    }
}
