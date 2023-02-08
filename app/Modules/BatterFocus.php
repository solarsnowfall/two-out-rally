<?php

namespace App\Modules;

enum BatterFocus: string
{
    case Vision = 'Vision';
    case Muscle = 'Muscle';
    case Athleticism = 'Athleticism';
    case Balanced = 'Balanced';

    public function skills(): array
    {
        return match($this) {
            BatterFocus::Vision => ['line_drive', 'reaction', 'discipline', 'bat_control'],
            BatterFocus::Muscle => ['fly_ball', 'lower_body', 'pull', 'arm_strength'],
            BatterFocus::Athleticism => ['speed', 'grace', 'ground_ball', 'accuracy'],
            BatterFocus::Balanced => []
        };
    }
}
