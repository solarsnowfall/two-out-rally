<?php

namespace App\Sim;

use App\Models\Player\Batter;
use App\Models\Player\Skill\StealingEffort;
use App\Models\Team\RosterPosition;
use App\Modules\AtBatOutcome;
use App\Modules\Chance;
use Faker\Provider\Base;

class Bases
{
    const FIRST = 1;
    const SECOND = 2;
    const THIRD = 3;

    public ?Batter $first = null;
    public ?Batter $second = null;
    public ?Batter $third = null;

    protected Game $game;

    /**
     * @param Game $game
     */
    public function __construct(Game $game)
    {
        $this->game = $game;
    }

    public function __toString(): string
    {
        return json_encode([
            'first' => $this->first,
            'second' => $this->second,
            'third' => $this->third
        ]);
    }

    /**
     * @param int $base_num
     * @return Batter|null
     */
    public function base(int $base_num): ?Batter
    {
        return match($base_num) {
            1 => $this->first,
            2 => $this->second,
            3 => $this->third
        };
    }

    /**
     * @return void
     */
    public function clear(): void
    {
        $this->first = null;
        $this->second = null;
        $this->third = null;
    }

    public function checkStealThird()
    {
        if ($this->second === null) {
            return false;
        }

        $steal = match(abs($this->game->runsHome - $this->game->runsAway)) {
            0 => 0.125,
            1 => 0.15,
            2 => 0.1,
            default => 0
        };

        $steal += match($this->game->inning) {
            1, 2, 3, 4, 5, 6 => 0,
            7 => 0.05,
            8 => 0.1,
            default => 0.15
        };

        $steal -= match($this->game->outs) {
            0, 2 => 0.5,
            1 => 0.2
        };

        $steal += match($this->second->skill->player_effort_id) {
            StealingEffort::STEALING_NEVER => -2.0,
            StealingEffort::STEALING_MODERATE => 0.25,
            StealingEffort::STEALING_AGGRESSIVE => 0.5,
            StealingEffort::STEALING_ALWAYS => 1.0,
            default => 0
        };

        if (Chance::roll() <= $steal) {

            $pickoff = $this->game->pitcher()->skill->pickoff;
            $pickoff -= $this->second->skill->baseRunning();
            $pickoff /= 100;
            $pickoff += 0.5;

            if (Chance::roll() <= $pickoff) {

                $this->game->outs++;
                $this->game->defensiveStats($this->game->pitcher())->a++;
                $this->game->pitchingStats($this->game->pitcher())->pk++;
                $this->game->pitchingStats($this->game->pitcher())->ip++;

                if ($this->game->outs === 3) {
                    $this->game->pitchingStats($this->game->pitcher())->pt += AtBatOutcome::Hit->pitchCount();
                }

                $this->game->offensiveStats($this->second)->cs++;
                $this->game->defensiveStats($this->game->secondBaseman())->po++;
                $steal_out = $this->second;

            }
        }
    }

    public function isRunnerOn(int $base_num)
    {
        return $this->base($base_num) !== null;
    }

    public function manOnFirst(): bool
    {
        return $this->isRunnerOn(Bases::FIRST);
    }

    public function manOnSecond(): bool
    {
        return $this->isRunnerOn(Bases::SECOND);
    }

    public function manOnThird(): bool
    {
        return $this->isRunnerOn(Bases::THIRD);
    }

    /**
     * @param int $base_num
     * @param Batter|null $batter
     * @return void
     */
    public function setBase(int $base_num, ?Batter $batter): void
    {
        switch ($base_num) {
            case 1:
                $this->first = $batter;
                break;
            case 2:
                $this->second = $batter;
                break;
            case 3:
                $this->third = $batter;
                break;
        }
    }

    /**
     * @param int $num_bases
     * @param ?Batter $batter
     * @return void
     */
    public function advanceRunners(int $num_bases, ?Batter $batter = null): void
    {
        for ($i=static::THIRD; $i>=static::FIRST; $i--) {

            if ($this->base($i) === null) {
                continue;
            }

            if ($i + $num_bases > 3) {
                $this->game->offensiveStats($this->base($i))->r++;
                $this->game->offensiveStats($batter)->rbi++;
                $this->game->runs[$this->game->side]++;
            } else {
                $this->setBase($i+1, $this->base($i));
            }

            $this->setBase($i, null);
        }

        if ($num_bases < static::THIRD) {
            $this->setBase($num_bases, $batter);
        }
    }

    /**
     * @return bool
     */
    public function loaded(): bool
    {
        return $this->first !== null && $this->second !== null && $this->third !== null;
    }
}
