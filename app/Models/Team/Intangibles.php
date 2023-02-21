<?php

namespace App\Models\Team;

use App\Models\Player\PlayerPersonality;

class Intangibles
{
    const MAX = 300;

    protected int $charisma = 0;
    protected int $chemistry = 0;
    protected int $competitiveness = 0;
    protected int $leadership = 0;

    public function consume(PlayerPersonality $personality): void
    {
        $this->charisma += $personality->charisma;
        $this->chemistry += $personality->chemistry;
        $this->competitiveness += $personality->competitiveness;
        $this->leadership += $personality->leadership;
    }

    public function charisma(): int
    {
        return min($this->charisma, static::MAX);
    }

    public function chemistry(): int
    {
        return min($this->chemistry, static::MAX);
    }

    public function competitiveness(): int
    {
        return min($this->competitiveness, static::MAX);
    }

    public function leadership(): int
    {
        return min($this->leadership, static::MAX);
    }
}
