<?php

namespace App\Sim\Pitches;

use App\Models\Player\Pitcher;

abstract class Pitch
{
    protected Pitcher $pitcher;

    public function __construct(Pitcher $pitcher)
    {
        $this->pitcher = $pitcher;
    }

    public function location(): Location
    {
        $location = new Location();
        return $location;
    }
    abstract public function speed(): int;
}
