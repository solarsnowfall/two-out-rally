<?php

namespace App\Sim\Stealing;

use App\Models\Player\Batter;
use App\Models\Player\Skill\StealingEffort;

class StealSecond extends Attempt
{

    public function steal()
    {
        $runner = $this->clearBase();
        $this->game->bases->second = $runner;
        return $runner;
    }

    public function runner(): ?Batter
    {
        return $this->game->bases->first;
    }

    public function fielder(): Batter
    {
        return $this->game->firstBaseman();
    }

    public function stolenBaseFielder(): Batter
    {
        return $this->game->secondBaseman();
    }

    public function clearBase(): Batter
    {
        $runner = $this->game->bases->first;
        $this->game->bases->first = null;

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
            7 => 0.1,
            8 => 0.2,
            default => 0.3
        };
    }

    public function nextRunnerPenalty(): float
    {
        return $this->game->bases->third !== null ? 0.6 : 0;
    }

    public function outsPenalty(): float
    {
        return match($this->game->outs) {
            0 => 0.3,
            1 => 0.2,
            default => 0
        };
    }

    public function runsBonus(): float
    {
        return match(abs($this->game->runsAway - $this->game->runsHome)) {
            0 => 0.25,
            1 => 0.3,
            2 => 0.2
        };
    }
}
