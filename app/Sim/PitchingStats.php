<?php

namespace App\Sim;

use App\Models\Player\Player;
use App\Models\Stats\PitchingStat;
use App\Models\Team\Team;

class PitchingStats extends StatContainer
{
    protected string $class = PitchingStat::class;

    /**
     * @var PitchingStat[]
     */
    protected array $stats = [];

    /**
     * @param Player $player
     * @return PitchingStat
     */
    public function forPlayer(Player $player): PitchingStat
    {
        return parent::forPlayer($player);
    }

    protected function players(string $side): array
    {
        $players = [];
        /** @var Team $team */
        $team = $side === 'away' ? $this->game->away : $this->game->home;

        foreach ($team->pitchers() as $pitcher) {
            $players[] = $pitcher;
        }

        return $players;
    }
}
