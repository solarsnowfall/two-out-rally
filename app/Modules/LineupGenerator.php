<?php

namespace App\Modules;

use App\Models\Player\Batter;
use App\Models\Team\Team;

class LineupGenerator
{

    protected $batters;

    protected Team $team;

    public function __construct(Team $team)
    {
        $this->team = $team;
        $this->batters = $team->batters;
    }

    public function generate(): array
    {
        $ids = $hit = $onb = $hmr = $all = $lineup = [];

        /**
         * @var int $key
         * @var Batter $batter
         */
        foreach ($this->batters as $key => $batter) {

            $ids[$key] = $batter->rosterPosition->id;

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

        array_multisort($hit, SORT_DESC, $ids, $onb, $hmr, $all);
        $lineup[2] = $ids[0];

        unset($ids[0], $onb[0], $hmr[0], $hit[0], $all[0]);
        array_multisort($onb, SORT_DESC, $ids, $hit, $hmr, $all);
        $lineup[0] = $ids[0];
        $lineup[3] = $ids[1];

        unset($ids[0], $ids[1], $onb[0], $onb[1], $hmr[0], $hmr[1], $hit[0], $hit[1], $all[0], $all[1]);
        array_multisort($all, SORT_DESC, $ids);

        foreach (array_keys($all) as $key) {
            if (!isset($lineup[$key])) {
                $lineup[$key] = $ids[$key];
            }
        }

        ksort($lineup);
        return $lineup;
    }
}
