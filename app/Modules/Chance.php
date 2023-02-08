<?php

namespace App\Modules;

class Chance
{
    /**
     * @param int $precision
     * @return float
     */
    public static function roll(int $precision = 3): float
    {
        return round(lcg_value(), $precision);
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
