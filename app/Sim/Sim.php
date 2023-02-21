<?php

namespace App\Sim;

use App\Models\League;
use App\Models\Matchup;
use App\Models\Season;
use App\Models\Sim\Series as SeriesModel;
use Illuminate\Support\Facades\DB;

class Sim
{
    protected Season $season;
    protected League $league;
    protected array $series = [];

    protected int $series_num = 0;

    public function __construct(League $league)
    {
        $this->season = Season::currentSeason();
        $this->league = $league;
    }

    public function run()
    {
        /** @var League $matchup */
        //foreach (League::all() as $league) {
            /** @var Matchup $matchup */
            foreach (Matchup::forLeague($this->league)->onDay($this->season->dayOffset())->get() as $matchup) {
                echo "Matchup $matchup->id<br />";
                $this->series[$this->series_num] = new Series($this->season, new SeriesModel(), $matchup);
                $this->series[$this->series_num]->run();
                $this->series_num++;
            }
       // }
    }

    public function currentMatchups()
    {

    }
}
