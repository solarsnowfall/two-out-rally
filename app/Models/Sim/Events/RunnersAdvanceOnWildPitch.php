<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

class RunnersAdvanceOnWildPitch extends GameEvent
{
    use HasParent;

    public function getDescription(): string
    {
        return 'Runners advance on wild pitch by ' . $this->pitcher->name;
    }
}
