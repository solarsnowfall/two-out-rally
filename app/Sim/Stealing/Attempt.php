<?php

namespace App\Sim\Stealing;

use App\Models\Player\Batter;
use App\Models\Player\Player;
use App\Models\Player\Skill\PlayerEffort;
use App\Modules\AtBat;
use App\Modules\AtBatOutcome;
use App\Modules\Chance;
use App\Sim\Game;
use Database\Factories\Player\PlayerFactory;

abstract class Attempt
{
    public bool $attemptMade;

    public Game $game;

    public float $roll;

    public bool $success;

    public function __construct(Game $game)
    {
        $this->game = $game;
        $this->roll = Chance::roll();
    }

    public function attemptMade(): bool
    {
        return $this->runner() !== null && $this->roll <= $this->chance();
    }

    public function run()
    {
        if ($this->pickedOff()) {

            $this->game->outs++;
            $this->game->defensiveStats($this->game->pitcher())->a++;
            $this->game->pitchingStats($this->game->pitcher())->pk++;
            $this->game->pitchingStats($this->game->pitcher())->ip++;

            if ($this->game->outs === 3) {
                $this->game->pitchingStats($this->game->pitcher())->pt += AtBatOutcome::Hit->pitchCount();
            }

            $this->game->offensiveStats($this->runner())->cs++;
            $this->game->defensiveStats($this->fielder())->po++;
            $runner_out = $this->clearBase();

        } elseif (!$this->success()) {

            $this->game->outs++;
            $this->game->pitchingStats($this->game->pitcher())->ip++;

            if ($this->game->outs === 3) {
                $this->game->pitchingStats($this->game->pitcher())->pt += AtBatOutcome::Hit->pitchCount();
            }

            $this->game->defensiveStats($this->stolenBaseFielder())->po++;
            $this->game->defensiveStats($this->game->catcher())->a++;
            $this->game->offensiveStats($this->runner())->cs++;
            $runner_out = $this->clearBase();

        } else {

            $runner = $this->steal();
            $this->game->offensiveStats($runner)->sb++;
        }

    }

    public function chance(): float
    {
        return  $this->runsBonus()
                + $this->inningBonus()
                - $this->nextRunnerPenalty()
                - $this->outsPenalty()
                + $this->runnerBonus();
    }

    public function pickedOff(): bool
    {
        $pick_off = $this->game->pitcher()->skill->pickoff;
        $pick_off -= $this->runner()->skill->baseRunning();
        $pick_off /= 100;
        $pick_off += 0.5;

        return Chance::roll() <= $pick_off;
    }

    public function success(): bool
    {
        $success = $this->runner()->skill->baseRunning() * 0.3;
        $success -= $this->game->pitcher()->skill->pickoff * 0.15;
        $success -= $this->game->catcher()->skill->throwingStrength() * 0.15;
        $success /= 100;
        $success += 0.5;

        return Chance::roll() <= $success;
    }

    public function runnerBonus(): float
    {
        if ($this->runner()->skill->player_effort_id > PlayerEffort::STEALING_ALWAYS) {
            dd($this->runner());
        }

        return match($this->runner()->skill->player_effort_id) {
            PlayerEffort::STEALING_NEVER => -2.0,
            PlayerEffort::STEALING_CONSERVATIVE => -0.25,
            PlayerEffort::STEALING_MODERATE => 0,
            PlayerEffort::STEALING_AGGRESSIVE => 0.25,
            PlayerEffort::STEALING_ALWAYS => 1.0
        };
    }

    abstract public function steal();

    abstract public function runner(): ?Batter;

    abstract public function fielder(): Batter;

    abstract public function stolenBaseFielder(): Batter;

    abstract public function clearBase(): Batter;

    abstract public function batterBonus(): float;

    abstract public function inningBonus(): float;

    abstract public function nextRunnerPenalty(): float;

    abstract public function outsPenalty(): float;

    abstract public function runsBonus(): float;
}
