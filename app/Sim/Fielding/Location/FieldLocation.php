<?php

namespace App\Sim\Fielding\Location;

use App\Models\Player\Batter;
use App\Models\Player\Pitcher;
use App\Modules\AtBat;
use App\Modules\FieldingOutcome;
use App\Sim\Game;

abstract class FieldLocation
{
    public AtBat $at_bat;

    public Batter $batter;

    public Batter|Pitcher|null $fielder = null;

    public ?Batter $fielder2 = null;

    public ?Batter $fielder3 = null;

    public Game $game;

    public Pitcher $pitcher;

    /**
     * @var FieldingOutcome[]
     */
    public array $outcome;

    public bool $fielding_error = false;

    public function __construct(Game $game, AtBat $at_bat)
    {
        $this->game = $game;
        $this->at_bat = $at_bat;
        $this->batter = $this->game->batter();
        $this->pitcher = $this->game->pitcher();
        $this->fielder = $this->fielder();
    }

    public abstract function fieldBall();

    public abstract function fielder(): Batter|Pitcher|null;

    public function defensiveRange(Batter $fielder1, float $bonus1, Batter $fielder2, float $bonus2): Batter
    {
        return $fielder1->skill->defensiveRange() * $bonus1 <= $fielder2->skill->defensiveRange() * $bonus2
            ? $fielder2
            : $fielder1;
    }

    public function skillCheck(int|float $skill, float $multiplier, float $offset): float
    {
        return $skill * $multiplier / 100 + $offset;
    }
}
