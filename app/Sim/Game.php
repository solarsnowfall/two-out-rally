<?php

namespace App\Sim;

use App\Models\Player\Batter;
use App\Models\Player\Pitcher;
use App\Models\Player\Player;
use App\Models\Sim\Game as GameModel;
use App\Models\Sim\GameEvent;
use App\Models\Sim\Series as SeriesModel;
use App\Models\Stats\DefensiveStat;
use App\Models\Stats\OffensiveStat;
use App\Models\Stats\PitchingStat;
use App\Models\Team\RosterPosition;
use App\Models\Team\Team;
use App\Modules\AtBat;
use App\Modules\AtBatOutcome;
use App\Sim\Fielding\Location\FieldLocation;
use App\Sim\Stealing\StealSecond;
use App\Sim\Stealing\StealThird;
use App\Sim\Traits\HasModel;
use App\Sim\Fielding\Fielding;

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

    public int $game_num;

    public int $inning = 1;

    public int $runsHome = 0;

    public int $runsAway = 0;

    public array $lineup = [];

    public array $runs = [0, 0];

    public int $outs = 0;

    public int $side = 0;

    public Bases $bases;

    public WpaTable $wpa;
    public float $wpa_current = 0;

    public float $wpa_previous = 0;

    protected array $startingPitcher = [];

    protected array $substitutionsMade = [];

    /**
     * @var GameEvent[]
     */
    protected array $events;

    public Gambit $gambit;

    public function __construct(SeriesModel $series, GameModel $game, int $game_num)
    {
        $this->series = $series;
        $this->game = $game;
        $this->game_num = $game_num;
        $this->game->series_id = $series->id;
        $this->bases = new Bases($this);
        $this->wpa = new WpaTable();

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

        $this->away->bullpen->setStartingPitcher($game_num);
        $this->home->bullpen->setStartingPitcher($game_num);

        $this->away->setLineupForPitcher($this->home->startingPitcher($game_num));
        $this->home->setLineupForPitcher($this->away->startingPitcher($game_num));

        $this->defensive_stats = new DefensiveStats($this->series, $this);
        $this->pitching_stats = new PitchingStats($this->series, $this);
        $this->offensive_stats = new OffensiveStats($this->series, $this);
        $this->gambit = new Gambit($this);
    }

    public function run()
    {
        while (!$this->gameComplete()) {

            //while (!$this->sideComplete()) {
            for ($this->side=0; $this->side<2; $this->side++){

                if ($this->inning > 3 && null !== $rule = $this->gambit->getApplicableRule()) {
                    dump($this->pitcher());
                    $this->makeSubstitution($rule);
                    $rule->applied = true;
                    dd($this->pitcher());
                }

                while ($this->outs < 3) {

                    $batter = $this->nextBatter();
                    $pitcher = $this->pitcher();

                    $steal_second = new StealSecond($this);

                    if ($steal_second->attemptMade()) {
                        $steal_second->run();
                    }

                    $steal_third = new StealThird($this);

                    if ($steal_third->attemptMade()) {
                        $steal_third->run();
                    }

                    if (!$this->pitchingStats($pitcher)->gs) {
                        $this->pitchingStats($pitcher)->gs++;
                    }

                    $this->offensiveStats($batter)->pa++;
                    $this->pitchingStats($pitcher)->bf++;

                    $atBat = new AtBat($batter, $pitcher);
                    $this->pitchingStats($pitcher)->pt += $atBat->outcome->pitchCount();

                    if ($atBat->outcome === AtBatOutcome::Walk) {
                        $this->walk($batter, $pitcher);
                    } elseif ($atBat->outcome === AtBatOutcome::Strikeout) {
                        $this->strikeout($batter, $pitcher);
                        $this->outs++;
                    } else {
                        $fielding = new Fielding($this, $atBat);
                        $fielding->fieldBall();
                    }

                    echo "$this->inning $this->side $this->outs {$this->runs[0]} {$this->runs[1]}<br />";

                    $this->wpa_previous = $this->wpa_current;
                    $this->wpa_current = $this->wpa->getWpa($this);
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

    public function defensiveTeam(): Team
    {
        return !$this->side ? $this->home : $this->away;
    }

    public function offensiveTeam(): Team
    {
        return !$this->side ? $this->away : $this->home;
    }

    public function fielder(int $roster_position_id): Batter
    {
        return  !$this->side
                    ? $this->home->getLineup()->fielderForPosition($roster_position_id)
                    : $this->away->getLineup()->fielderForPosition($roster_position_id);
    }

    public function addSubstitution(Team $team, RosterPosition $position)
    {
        $this->substitutionsMade[$team->id][$position->id] = true;
    }

    public function checkSubstitutionAvailable(Team $team, RosterPosition $position)
    {
        return !isset($this->substitutionsMade[$team->id][$position->id]);
    }

    public function defensiveStats(Player $player): DefensiveStat
    {
        return $this->defensive_stats->forPlayer($player);
    }

    public function offensiveStats(Batter $batter): OffensiveStat
    {
        return $this->offensive_stats->forPlayer($batter);
    }

    public function pitchingStats(Pitcher $pitcher): PitchingStat
    {
        return $this->pitching_stats->forPlayer($pitcher);
    }

    public function catcher(): Batter
    {
        return $this->fielder(RosterPosition::CATCHER);
    }

    public function firstBaseman(): Batter
    {
        return $this->fielder(RosterPosition::FIRST_BASEMAN);
    }

    public function secondBaseman(): Batter
    {
        return $this->fielder(RosterPosition::SECOND_BASEMAN);
    }

    public function thirdBaseman(): Batter
    {
        return $this->fielder(RosterPosition::THIRD_BASEMAN);
    }

    public function shortstop(): Batter
    {
        return $this->fielder(RosterPosition::SHORTSTOP);
    }

    public function leftFielder(): Batter
    {
        return $this->fielder(RosterPosition::LEFT_FIELDER);
    }

    public function centerFielder(): Batter
    {
        return $this->fielder(RosterPosition::CENTER_FIELDER);
    }

    public function rightFielder(): Batter
    {
        return $this->fielder(RosterPosition::RIGHT_FIELDER);
    }

    public function addEvent(AtBat $at_bat, ?FieldLocation $fielding = null): int
    {
        $event = new GameEvent();
        $event->inning = $this->inning;
        $event->batting = !$this->side ? 'away' : 'home';
        $event->batter_id = $this->batter()->id;
        $event->pitcher_id = $this->pitcher()->id;

        $event->at_bat = $at_bat->outcome->value;
        $event->hit_type = $at_bat->hitType;
        $event->bases = (string) $this->bases;

        $event->batter_id = $this->batter()->id;
        $event->pitcher_id = $this->pitcher()->id;

        if ($fielding) {
            $event->fielder_id = $fielding->fielder()->id;
            $event->fielder_id2 = $fielding->fielder2->id;
            $event->fielder_id3 = $fielding->fielder3->id;
        }

        return count($this->events);
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

    public function batter()
    {
        return  !$this->side
                    ? $this->away->getLineup()->currentBatter()
                    : $this->home->getLineup()->currentBatter();
    }

    public function nextBatter(): Batter
    {
        return  !$this->side
                    ? $this->away->getLineup()->nextBatter()
                    : $this->home->getLineup()->nextBatter();
    }

    public function pitcher(): Pitcher
    {
        return  !$this->side
                    ? $this->home->bullpen->currentPitcher()
                    : $this->away->bullpen->currentPitcher();
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

    protected function single(Batter $batter, Pitcher $pitcher): void
    {
        $this->bases->advanceRunners(1, $batter);
        $this->offensiveStats($batter)->b1++;
        $this->pitchingStats($pitcher)->b1a++;
    }

    protected function double(Batter $batter, Pitcher $pitcher): void
    {
        $this->bases->advanceRunners(2, $batter);
        $this->offensiveStats($batter)->b2++;
        $this->pitchingStats($pitcher)->b2a++;
    }

    protected function tripple(Batter $batter, Pitcher $pitcher): void
    {
        $this->bases->advanceRunners(3, $batter);
        $this->offensiveStats($batter)->b3++;
        $this->pitchingStats($pitcher)->b3a++;
    }

    protected function homerun(Batter $batter, Pitcher $pitcher): void
    {
        $this->bases->advanceRunners(4, $batter);
        $this->offensiveStats($batter)->hr++;
        $this->pitchingStats($pitcher)->hra++;
    }

    protected function strikeout(Batter $batter, Pitcher $pitcher)
    {
        $this->offensiveStats($batter)->k++;
        $this->pitchingStats($pitcher)->so++;
    }

    protected function walk(Batter $batter, Pitcher $pitcher)
    {
        $this->bases->advanceRunners(1, $batter);
        $this->offensiveStats($batter)->bb++;
        $this->pitchingStats($pitcher)->bba++;
    }

    protected function makeSubstitution(\App\Models\Team\Gambit $rule)
    {
        if ($rule->type === 'relieve_pitcher') {
            !$this->side
                ? $this->home->bullpen->makeSubstitution($rule)
                : $this->away->bullpen->makeSubstitution($rule);
        }
    }
}
