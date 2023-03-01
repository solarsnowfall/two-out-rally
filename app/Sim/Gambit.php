<?php

namespace App\Sim;

use App\Models\Player\Player;
use App\Models\Team\Team;
use App\Models\Team\Gambit as Rule;
use App\Modules\BatterFocus;
use App\Modules\Leverage;

class Gambit
{
    public Game $game;

    public function __construct(Game $game)
    {
        $this->game = $game;
    }

    /**
     * @return ?Rule
     */
    public function getApplicableRule(): ?Rule
    {
        foreach (['away', 'home'] as $side) {
            /** @var Team $team */
            foreach ($this->game->$side as $team) {
                /** @var Rule $rule */
                foreach ($team->gambits as $rule) {
                    if ($this->checkApplicable($rule)) {
                        return $rule;
                    }
                }
            }
        }

        return null;
    }

    public function checkApplicable(Rule $rule, string $side): bool
    {
        return  !$rule->applied
                && $this->checkInning($rule)
                && $this->checkLeverage($rule)
                && $this->checkOuts($rule)
                && $this->checkOnBase($rule)
                && $this->checkFocus($rule)
                && $this->checkHandedness($rule)
                && $this->checkType($rule, $side)
                && $this->checkSubstitution($rule, $side);
    }

    public function checkType(Rule $rule, string $side): bool
    {
        return  $rule->type === 'relieve_pitcher'
                && (
                    $this->game->side === 0 && $side === 'home'
                    || $this->game->side === 1 && $side === 'away'
                )
                && $this->checkRelievePitcher($rule);
    }

    public function checkRelievePitcher(Rule $rule): bool
    {
        if ($rule->relief_reason === 'situational') {
            return true;
        }

        $pitcher = $this->game->pitcher();

        if ($rule->relief_reason === 'exhaustion') {
            return $this->game->pitchingStats($pitcher)->pt > $pitcher->skill->stamina + 30;
        }

        if (str_contains($rule->relief_reason, '_allowed')) {
            $runs = match($rule->relief_reason) {
                'one_run_allowed' => 1,
                'two_runs_allowed' => 2,
                'three_runs_allowed' => 3,
                'four_runs_allowed' => 4,
                'five_runs_allowed' => 5
            };
            return $this->game->pitchingStats($pitcher)->ra >= $runs;
        }

        return false;
    }

    /**
     * @param Rule $rule
     * @return bool
     */
    public function checkHandedness(Rule $rule): bool
    {
        if ($rule->handedness === null) {
            return true;
        }

        $player = $rule->type === 'relieve_pitcher'
            ? $this->game->defensiveTeam()->bullpen->currentPitcher()
            : $this->game->offensiveTeam()->getLineup()->currentBatter();

        return $player->handedness === $rule->handedness;
    }

    /**
     * @param Rule $rule
     * @return bool
     */
    public function checkFocus(Rule $rule): bool
    {
        if ($rule->focus_id === null) {
            return true;
        }

        /** @var Player $player */
        $player = $rule->focus->type === BatterFocus::class
            ? $this->game->offensiveTeam()->getLineup()->currentBatter()
            : $this->game->defensiveTeam()->bullpen->currentPitcher();

        return $player->skill->focus()->id === $rule->focus->id;
    }

    /**
     * @param Rule $rule
     * @return bool
     */
    public function checkInning(Rule $rule): bool
    {
        return $rule->inning === $this->game->inning;
    }

    /**
     * @param Rule $rule
     * @return bool
     */
    public function checkLeverage(Rule $rule): bool
    {
        if ($rule->leverage === 'ignore') {
            return true;
        }

        return match($rule->leverage) {
            'very_low',
            'low',
            'medium',
            'high',
            'very_high',
            'critical' => $this->checkLeverageWpa($rule),
            'down_by_three',
            'down_by_two',
            'down_by_one',
            'tied',
            'up_by_one',
            'up_by_two',
            'up_by_three' => $this->checkLeverageRuns($rule)
        };
    }

    /**
     * @param Rule $rule
     * @return bool
     */
    public function checkOnBase(Rule $rule): bool
    {
        $test = true;

        foreach ($rule->on_base as $base => $on) {

            if (!$on) {
                continue;
            }

            if ($this->game->bases->$base === null) {
                $test = false;
                break;
            }
        }

        return $test;
    }

    /**
     * @param Rule $rule
     * @return bool
     */
    public function checkOuts(Rule $rule): bool
    {
        return !$rule->outs || $rule->outs = $this->game->outs;
    }

    /**
     * This will eventually need to be broadened to account for substitutions beyond pitching.
     *
     * @param Rule $rule
     * @param Team $team
     * @return bool
     */
    public function checkSubstitution(Rule $rule, string $side): bool
    {
        return !$side
            ? $this->game->home->bullpen->checkSubstitutionMade($rule->substitutePosition)
            : $this->game->away->bullpen->checkSubstitutionMade($rule->backupSubstitutePosition);
    }

    private function checkLeverageRuns(Rule $rule): bool
    {
        $runs = match($rule->leverage) {
            'down_by_three' => -3,
            'down_by_two' => -2,
            'down_by_one' => -1,
            'tied' => 0,
            'up_by_one' => 1,
            'up_by_two' => 2,
            'up_by_three' => 3
        };

        $run_diff = !$this->game->side
            ? $this->game->runsAway - $this->game->runsHome
            : $this->game->runsHome - $this->game->runsAway;

        return $run_diff >= $runs;
    }

    private function checkLeverageWpa(Rule $rule): bool
    {
        $wpa = abs($this->game->wpa_previous - $this->game->wpa_current);
        $leverage = Leverage::make($rule->leverage);

        return $wpa >= $leverage->range_low && $wpa <= $leverage->range_high;
    }
}
