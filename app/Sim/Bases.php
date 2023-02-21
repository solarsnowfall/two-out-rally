<?php

namespace App\Sim;

use App\Models\Player\Batter;

class Bases
{
    const FIRST = 1;
    const SECOND = 2;
    const THIRD = 3;

    public ?Batter $first = null;
    public ?Batter $second = null;
    public ?Batter $third = null;

    protected Game $game;

    /**
     * @param Game $game
     */
    public function __construct(Game $game)
    {
        $this->game = $game;
    }

    /**
     * @param int $base_num
     * @return Batter|null
     */
    public function base(int $base_num): ?Batter
    {
        return match($base_num) {
            1 => $this->first,
            2 => $this->second,
            3 => $this->third
        };
    }

    /**
     * @return void
     */
    public function clear(): void
    {
        $this->first = null;
        $this->second = null;
        $this->third = null;
    }

    /**
     * @param int $base_num
     * @param Batter|null $batter
     * @return void
     */
    public function setBase(int $base_num, ?Batter $batter): void
    {
        switch ($base_num) {
            case 1:
                $this->first = $batter;
                break;
            case 2:
                $this->second = $batter;
                break;
            case 3:
                $this->third = $batter;
                break;
        }
    }

    /**
     * @param int $num_bases
     * @param Batter $batter
     * @return void
     */
    public function advanceRunners(int $num_bases, Batter $batter): void
    {
        for ($i=static::THIRD; $i>=static::FIRST; $i--) {

            if ($this->base($i) === null) {
                continue;
            }

            if ($i + $num_bases > 3) {
                $this->game->offensive_stats->forPlayer($this->base($i))->r++;
                $this->game->offensive_stats->forPlayer($batter)->rbi++;
                $this->game->runs[$this->game->side]++;
            } else {
                $this->setBase($i+1, $this->base($i));
            }

            $this->setBase($i, null);
        }

        if ($num_bases < static::THIRD) {
            $this->setBase($num_bases, $batter);
        }
    }

    /**
     * @return bool
     */
    public function loaded(): bool
    {
        return $this->first !== null && $this->second !== null && $this->third !== null;
    }
}
