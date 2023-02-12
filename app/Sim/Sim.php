<?php

namespace App\Sim;

use App\Models\League;
use App\Models\Matchup;
use App\Models\Season;
use App\Models\Sim\Series;

class Sim
{
    protected Season $season;

    public function __construct()
    {
        $this->season = Season::currentSeason();
    }

    public function run()
    {
        /** @var League $matchup */
        foreach (League::all() as $league) {
            /** @var Matchup $matchup */
            foreach (Matchup::forLeague($league)->onDay($this->season->day)->get() as $matchup) {
                $series = new Series();
                $series->day = $this->season->day;
                $series->matchup_id = $matchup->id;
            }
        }
    }

    public function currentMatchups()
    {

    }
}
