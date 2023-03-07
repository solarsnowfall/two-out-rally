<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

class RunnersAdvanceOnPassedBall extends GameEvent
{
    use HasParent;
    public function getDescription(): string
    {
        // TODO: Implement getDescription() method.
    }
}
