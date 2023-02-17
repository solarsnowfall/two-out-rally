<?php

namespace App\Modules;

use App\Models\Player\Batter;
use App\Models\Player\Position;
use App\Models\Team\RosterPosition;
use App\Models\Team\Team;

class LineupGenerator
{

    protected $batters;

    protected Team $team;

    public function __construct(Team $team)
    {
        $this->team = $team;
        $this->batters = $team->batters();
    }

    public function generate(): array
    {
        $ids = $batters = $hit = $onb = $hmr = $all = $lineup = [];

        /**
         * @var int $key
         * @var Batter $batter
         */
        foreach ($this->batters as $key => $batter) {

            $skip = match($batter->rosterPosition->id) {
                RosterPosition::BACKUP_CATCHER,
                RosterPosition::BACKUP_INFIELDER,
                RosterPosition::BACKUP_OUTFIELDER,
                RosterPosition::BACKUP_INFIELDER2 => true,
                default => false
            };

            if ($skip) {
                continue;
            }

            $ids[$key] = $batter->id;

            $batters[$key] = $batter;

            $hit[$key] = $batter->skill->liner()
                + $batter->skill->fly_ball
                + $batter->skill->flyBallPower()
                + $batter->skill->lineDrivePower();

            $onb[$key] = $batter->skill->liner()
                + $batter->skill->grounder()
                + $batter->skill->walk()
                + $batter->skill->speed;

            $hmr[$key] = $batter->skill->fly_ball
                + $batter->skill->flyBallPower();

            $all[$key] = $hit[$key] + $onb[$key] + $hmr[$key];
        }

        array_multisort($hit, SORT_DESC, $ids, $batters, $onb, $hmr, $all);
        $lineup[2] = $batters[0];

        unset($ids[0], $batters[0], $onb[0], $hmr[0], $hit[0], $all[0]);
        array_multisort($onb, SORT_DESC, $ids, $batters, $hit, $hmr, $all);
        $lineup[0] = $batters[0];
        $lineup[3] = $batters[1];

        unset($ids[0], $ids[1], $batters[0], $batters[1], $onb[0], $onb[1], $hmr[0], $hmr[1], $hit[0], $hit[1], $all[0], $all[1]);
        array_multisort($all, SORT_DESC, $ids, $batters);

        $slots = [1, 4, 5, 6, 7, 8, 9];
        $slot = 0;
        while (count($batters)) {
            $lineup[$slots[$slot]] = array_shift($batters);
            $slot++;
        }

        ksort($lineup);
        return $lineup;
    }
}
