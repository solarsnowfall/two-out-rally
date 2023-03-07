<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

class GroundballSingle extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        // return the description...
    }
}
