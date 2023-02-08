<?php

namespace App\Modules;

use App\Models\Player\Pitcher;

enum PitcherFocus: string
{
    case Control = 'Control';
    case Movement = 'Movement';
    case Velocity = 'Velocity';
    case Balanced = 'Balanced';

    public function skills(): array
    {
        return match($this) {
            PitcherFocus::Control => ['stamina', 'mechanics', 'paint_corner', 'induce_grounder'],
            PitcherFocus::Movement => ['vertical_break', 'release', 'horizontal_break', 'induce_popup'],
            PitcherFocus::Velocity => ['power', 'delivery', 'explosiveness', 'pickoff'],
            PitcherFocus::Balanced => []
        };
    }
}
