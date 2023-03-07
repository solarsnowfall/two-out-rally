<?php

namespace App\Sim\Stealing;

use App\Models\Player\Batter;
use App\Models\Player\Skill\StealingEffort;

class StealThird extends Attempt
{

    public function steal()
    {
        $runner = $this->clearBase();
        $this->game->bases->third = $runner;
        return $runner;
    }

    public function runner(): ?Batter
    {
        return $this->game->bases->second;
    }

    public function fielder(): Batter
    {
        return $this->game->secondBaseman();
    }

    public function stolenBaseFielder(): Batter
    {
        return $this->game->thirdBaseman();
    }

    public function clearBase(): Batter
    {
        $runner = $this->game->bases->second;
        $this->game->bases->second = null;

        return $runner;
    }

    public function batterBonus(): float
    {
        return match($this->runner()->skill->player_effort_id) {
            StealingEffort::STEALING_NEVER => -2.0,
            StealingEffort::STEALING_MODERATE => 0.25,
            StealingEffort::STEALING_AGGRESSIVE => 0.5,
            StealingEffort::STEALING_ALWAYS => 1.0,
            default => 0
        };
    }

    public function inningBonus(): float
    {
        return match($this->game->inning) {
            1, 2, 3, 4, 5, 6 => 0,
            7 => 0.05,
            8 => 0.1,
            default => 0.15
        };
    }

    public function nextRunnerPenalty(): float
    {
        return 0;
    }

    public function outsPenalty(): float
    {
        return match($this->game->outs) {
            0, 2 => 0.5,
            1 => 0.2
        };
    }

    public function runsBonus(): float
    {
        return match(abs($this->game->runsAway - $this->game->runsHome)) {
            0 => 0.125,
            1 => 0.15,
            2 => 0.1
        };
    }
}
