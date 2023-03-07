<?php

namespace App\Models\Sim\Events;

use App\Models\Sim\GameEvent;
use Parental\HasParent;

class Strikeout extends GameEvent
{
    use HasParent;


    public function getDescription(): string
    {
        return $this->batter->name . ' struck out';
    }
}
