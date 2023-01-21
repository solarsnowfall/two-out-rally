<?php

namespace App\Modules;

class Chance
{
    /**
     * @return float
     */
    public static function roll(): float
    {
        return round(lcg_value(), 3);
    }

    /**
     * @param float $chance
     * @param float $min
     * @param float $max
     * @return float
     */
    public static function constrain(float $chance, float $min, float $max): float
    {
        return min(max($chance, $min), $max);
    }
}
