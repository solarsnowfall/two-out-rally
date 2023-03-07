<?php

namespace App\Sim\Fielding\Location;

use App\Models\Player\Batter;
use App\Modules\Chance;
use App\Modules\FieldingOutcome;

class A1 extends FieldLocation
{

    public function fieldBall()
    {
        $fgb = $this->fielder->skill->fieldGroundBall($this->pitcher, $this->batter);
        $fgb = max(min($fgb, 0.91), 0.5);

        $roll = Chance::roll();

        if ($roll > $fgb) {
            // "groundball to $location, double";
            $this->outcome[] = FieldingOutcome::Double;
        } elseif ($roll == $fgb) {
            // "groundball to $location, fielding error by 3b";
            $this->outcome[] = FieldingOutcome::Single;
            $this->fielding_error = true;
        } else {

            if (
                $this->game->outs < 2
                && $this->game->bases->first
                && ($this->game->bases->second || $this->game->bases->third)
            ){

                // "force out by 3b";
                $roll = Chance::roll();
                $this->fielder2 = $this->game->firstBaseman();
                $this->outcome = FieldingOutcome::ForceOut;

                if ($roll > $this->throwToFirst($this->fielder)) {
                    // ", runner reaches 1b by fielder's choice";
                } elseif ($roll === $this->throwToFirst($this->fielder)) {
                    // ", dropped by 1b, runner reaches 1b fy fielder's choice"
                } else {

                    $roll = Chance::roll();
                    $this->fielder2 = $this->game->firstBaseman();

                    if ($roll <= $this->thirdToFirstDoublePlay($this->fielder)) {
                        // ", 3b to 1b for double play";
                    } elseif ($this->wildThrowSavedAtFirst($roll, $this->fielder, $this->fielder2)) {
                        // ", spectacular play saving an error at 1b for a double play"
                    } else {
                        // ", safe at 1b by fielder's choice, advances to 2b on throwing error by 3b to 1b";
                    }
                }

            } else if ($this->game->bases->first !== null && $this->game->outs < 2) {

                $roll = Chance::roll();

                if ($roll > $this->throwToSecond($this->fielder)) {
                    // "groundball to $location, infield single";
                } elseif ($roll === $this->throwToSecondError($this->fielder)) {
                    // 'groundball to $location, throwing error by 3b to 2b";
                } else {
                    if (Chance::roll() <= $this->forceOutAtSecond($this->fielder)) {
                        // "groundball to $oclation, force out 3b to 2b";
                        $this->fielder2 = $this->game->secondBaseman();

                        if (Chance::roll() > $this->safeOnFieldersChoice($this->fielder2, $this->batter)) {
                            // ", safe at 1b by fielder's choice"
                        } else {
                            $roll = Chance::roll();

                            if ($roll <= $this->forceOutAtFirstForDoublePlay($this->fielder2)) {
                                //", force out at 1b for double player";

                            } elseif ($this->wildThrowSavedAtFirst($roll, $this->fielder2, $this->fielder3 = $this->game->firstBaseman())) {
                                //", wild throw by 2b, spectacular play saving an error at 1b for a double play";

                            } else {
                                //", safe at 1b by fielder's choice";
                            }
                        }
                    } else {
                        // "ground ball to $location, throwing error by 3b to 2b";
                    }
                }

            } else {

                $roll = Chance::roll();

                if ($roll > $this->throwToFirst($this->fielder)) {
                    // "gourndball to $location, infield single";
                } elseif ($roll === $this->throwToFirst($this->fielder)) {
                    // "groundball to $location, dropped by 1b";
                } else {

                    $roll = Chance::roll();

                    if ($roll <= $this->groundOutToThird($this->fielder)) {
                        // "groundball to $location, groundout to 3b"
                    } elseif ($this->wildThrowSavedAtFirst($roll, $this->fielder, $this->fielder2 = $this->game->firstBaseman())) {
                        // "groundball to $location, wild throw by 3b, spectacular play saving an error at 1b";
                    } else {
                        // "groundball to $location, 2 base throwing error by 3b to 1b";
                    }
                }
            }
        }
    }

    public function fielder(): ?Batter
    {
        return $this->game->thirdBaseman();
    }

    protected function groundOutToThird(Batter $fielder)
    {
        return $this->skillCheck($fielder->skill->accuracy, 0.2, 0.75);
    }

    protected function thirdToFirstDoublePlay(Batter $third)
    {
        return $this->skillCheck($third->skill->accuracy, 0.2, 0.75);
    }

    protected function throwToFirst(Batter $fielder): float
    {
        return $this->skillCheck($fielder->skill->throwingStrength(), 0.2, 0.75);
    }

    protected function throwToSecond(Batter $fielder): float
    {
        return $this->skillCheck($fielder->skill->throwingStrength(), 0.1, 0.85);
    }

    protected function throwToSecondError(Batter $fielder): float
    {
        return $this->skillCheck($fielder->skill->throwingStrength(), 0.15, 0.85);
    }

    protected function forceOutAtSecond(Batter $fielder): float
    {
        return $this->skillCheck($fielder->skill->accuracy, 0.15, 0.85);
    }

    protected function forceOutAtFirstForDoublePlay(Batter $fielder): float
    {
        return $this->skillCheck($fielder->skill->accuracy, 0.2, 0.75);
    }

    protected function safeOnFieldersChoice(Batter $fielder, Batter $runner)
    {
        return $this->skillCheck(
            $fielder->skill->throwingStrength() - $runner->skill->baseRunning(),
            0.2,
            0.6
        );
    }

    protected function wildThrowSavedAtFirst(float $roll, Batter $third, Batter $first)
    {
        return $roll * 100 - $third->skill->accuracy * 0.2 <= $first->skill->fieldCleanly();
    }
}
