<?php

namespace App\Modules;

class Side
{
    public static function toInt(string $side): int
    {
        return $side === 'away' ? 0 : 1;
    }

    public static function toString(int $side): string
    {
        return !$side ? 'away' : 'home';
    }
}
