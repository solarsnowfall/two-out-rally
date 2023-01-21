<?php

namespace App\Modules;

class Chance
{
    public static function roll(): float
    {
        return round(lcg_value(), 3);
    }
}
