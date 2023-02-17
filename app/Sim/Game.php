<?php

namespace App\Sim;

use App\Models\Matchup;
use App\Models\Player\Pitcher;
use App\Models\Sim\Game as GameModel;
use App\Models\Sim\Series as SeriesModel;
use App\Models\Team\Team;
use App\Modules\AtBat;
use App\Sim\Traits\HasModel;

/**
 * @property GameModel $game
 */
class Game
{
    use HasModel;

    protected SeriesModel $series;

    public Team $away;

    public Team $home;

    protected int $game_num;

    protected int $inning = 1;

    protected int $runsHome;

    protected int $runsAway;

    protected array $lineup = [];

    protected array $runs;

    protected int $outs = 0;

    protected int $side = 0;

    protected array $startingPitcher = [];

    public function __construct(SeriesModel $series, GameModel $game, int $game_num)
    {
        $this->series = $series;
        $this->game = $game;
        $this->game_num = $game_num;
        $this->game->series_id = $series->id;

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
    }

    public function run()
    {
        while (!$this->gameComplete()) {

            while (!$this->inningComplete()) {

                while (!$this->sideComplete()) {

                    $at_bat = new AtBat($this->batter())

                    $this->outs++;
                    echo "outs $this->outs\n";

                }

                echo "side $this->side complete\n";

                $this->side++;
                $this->outs = 0;
            }

            echo "inning $this->inning complete\n";

            $this->inning++;
            $this->side = 0;
        }
    }

    public function save()
    {
        $this->game->save();
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
        return $this->inning >= 9;
    }

    protected function inningComplete()
    {
        return $this->side === 2 && $this->sideComplete();
    }

    protected function sideComplete()
    {
        return $this->outs === 3;
    }

    protected function batter()
    {
        return  $this->side
                    ? $this->away->getLineup()->nextBatter()
                    : $this->home->getLineup()->nextBatter();
    }



    protected function lineup()
    {
        return  $this->side
                    ? $this->away->lineupForPitcher($this->startingPitcher())
                    : $this->home->lineupForPitcher($this->startingPitcher());
    }

    protected function startingPitcher()
    {
        return  $this->side
                    ? $this->home->rotation->startingPitcher($this->game_num)
                    : $this->away->rotation->startingPitcher($this->game_num);
    }
}
