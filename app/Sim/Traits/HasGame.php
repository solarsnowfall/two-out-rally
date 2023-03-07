<?php

namespace App\Sim\Traits;

use App\Models\Player\Batter;
use App\Models\Player\Pitcher;
use App\Sim\Game;

trait HasGame
{
    public Game $game;

    /**
     * @return Batter
     */
    public function batter(): Batter
    {
        return $this->game->batter();
    }

    /**
     * @return Pitcher
     */
    public function pitcher(): Pitcher
    {
        return $this->game->pitcher();
    }

    /**
     * @param int $base_num
     * @return Batter|null
     */
    public function runnerAt(int $base_num): ?Batter
    {
        return $this->game->bases->base($base_num);
    }

    public function pitchingStats()
    {
        return $this->game->pitchingStats($this->pitcher());
    }
}
