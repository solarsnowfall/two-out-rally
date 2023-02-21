<?php

namespace App\Sim;

use App\Models\Matchup;
use App\Models\Player\Batter;
use App\Models\Player\Pitcher;
use App\Models\Sim\Game as GameModel;
use App\Models\Sim\Series as SeriesModel;
use App\Models\Team\Team;
use App\Modules\AtBat;
use App\Modules\AtBatOutcome;
use App\Sim\Traits\HasModel;

/**
 * @property GameModel $game
 */
class Game
{
    use HasModel;

    public SeriesModel $series;
    public Team $away;
    public Team $home;
    public DefensiveStats $defensive_stats;
    public PitchingStats $pitching_stats;
    public OffensiveStats $offensive_stats;

    protected int $game_num;

    protected int $inning = 1;

    public int $runsHome;

    public int $runsAway;

    public array $lineup = [];

    public array $runs = [0, 0];

    public int $outs = 0;

    public int $side = 0;

    public Bases $bases;

    protected array $startingPitcher = [];

    public function __construct(SeriesModel $series, GameModel $game, int $game_num)
    {
        $this->series = $series;
        $this->game = $game;
        $this->game_num = $game_num;
        $this->game->series_id = $series->id;
        $this->bases = new Bases($this);

        if ($this->locationFlipped()) {
            $this->game->away_id = $this->series->matchup->home_id;
            $this->game->home_id = $this->series->matchup->away_id;
            $this->away = $this->series->matchup->homeTeam();
            $this->home = $this->series->matchup->awayTeam();
        } else {
            $this->game->away_id = $this->series->matchup->away_id;
            $this->game->home_id = $this->series->matchup->home_id;
            $this->away = $this->series->matchup->awayTeam();
            $this->home = $this->series->matchup->homeTeam();
        }

        $this->away->setLineupForPitcher($this->home->startingPitcher($game_num));
        $this->home->setLineupForPitcher($this->away->startingPitcher($game_num));

        $this->defensive_stats = new DefensiveStats($this->series, $this);
        $this->pitching_stats = new PitchingStats($this->series, $this);
        $this->offensive_stats = new OffensiveStats($this->series, $this);
    }

    public function run()
    {
        $this->pitching_stats->forPlayer($this->away->bullpen->startingPitcher($this->game_num))->gs++;
        $this->pitching_stats->forPlayer($this->home->bullpen->startingPitcher($this->game_num))->gs++;

        while (!$this->gameComplete()) {



                //while (!$this->sideComplete()) {
                for ($this->side=0; $this->side<2; $this->side++){

                    while ($this->outs < 3) {

                        $batter = $this->batter();
                        $pitcher = $this->startingPitcher();

                        $this->offensive_stats->forPlayer($batter)->pa++;
                        $this->pitching_stats->forPlayer($pitcher)->bf++;

                        $fielding = new Fielding($this, new AtBat($batter, $pitcher));
                        $this->pitching_stats->forPlayer($pitcher)->pt += $fielding->atBat->outcome->pitchCount();

                        if ($fielding->atBat->outcome === AtBatOutcome::Hit) {
                            $this->single($batter, $pitcher);
                        } elseif ($fielding->atBat->outcome === AtBatOutcome::Walk) {
                            $this->walk($batter, $pitcher);
                        } elseif ($fielding->atBat->outcome === AtBatOutcome::Strikeout) {
                            $this->strikeout($batter, $pitcher);
                            $this->outs++;
                        }

                        echo "$this->inning $this->side $this->outs {$this->runs[0]} {$this->runs[1]}<br />";
                    }

                    $this->outs = 0;
                }

                $this->inning++;

        }

        echo "<br />Game Complete<br />";

        return $this;
    }

    public function save()
    {
        $this->game->save();
    }

    public function fielders()
    {
        return !$this->side
            ? $this->home->lineupForPitcher($this->away->startingPitcher($this->game_num))
            : $this->away->lineupForPitcher($this->home->startingPitcher($this->game_num));
    }


    protected function locationFlipped()
    {
        if ($this->series->day <= 34) {
            return false;
        }

        return match($this->game_num) {
            0, 1, 5, 6 => false,
            2, 3, 4 => true
        };
    }

    protected function gameComplete()
    {
        return $this->inning > 9 && $this->runs[0] != $this->runs[1];
    }

    protected function inningComplete()
    {
        return $this->side === 1 && $this->sideComplete();
    }

    protected function sideComplete()
    {
        return $this->outs === 3;
    }

    protected function batter()
    {
        return  !$this->side
                    ? $this->away->getLineup()->nextBatter()
                    : $this->home->getLineup()->nextBatter();
    }



    protected function lineup()
    {
        return  !$this->side
                    ? $this->away->lineupForPitcher($this->startingPitcher())
                    : $this->home->lineupForPitcher($this->startingPitcher());
    }

    protected function startingPitcher()
    {
        return  $this->side
                    ? $this->home->bullpen->startingPitcher($this->game_num)
                    : $this->away->bullpen->startingPitcher($this->game_num);
    }

    protected function single(Batter $batter, Pitcher $pitcher)
    {
        $this->bases->advanceRunners(1, $batter);
        $this->offensive_stats->forPlayer($batter)->b1++;
        $this->pitching_stats->forPlayer($pitcher)->b1a++;
    }

    protected function double(Batter $batter, Pitcher $pitcher)
    {
        $this->bases->advanceRunners(2, $batter);
        $this->offensive_stats->forPlayer($batter)->b2++;
        $this->pitching_stats->forPlayer($pitcher)->b2a++;
    }

    protected function tripple(Batter $batter, Pitcher $pitcher): void
    {
        $this->bases->advanceRunners(3, $batter);
        $this->offensive_stats->forPlayer($batter)->b3++;
        $this->pitching_stats->forPlayer($pitcher)->b3a++;
    }

    protected function homerun(Batter $batter, Pitcher $pitcher): void
    {
        $this->bases->advanceRunners(4, $batter);
        $this->offensive_stats->forPlayer($batter)->hr++;
        $this->pitching_stats->forPlayer($pitcher)->hra++;
    }

    protected function strikeout(Batter $batter, Pitcher $pitcher)
    {
        $this->offensive_stats->forPlayer($batter)->k++;
        $this->pitching_stats->forPlayer($pitcher)->so++;
    }

    protected function walk(Batter $batter, Pitcher $pitcher)
    {
        $this->bases->advanceRunners(1, $batter);
        $this->offensive_stats->forPlayer($batter)->bb++;
        $this->pitching_stats->forPlayer($pitcher)->bba++;
    }
}
