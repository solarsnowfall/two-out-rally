<?php

namespace App\Modules;

enum WeightClass: int
{
    case Thin = -1;
    case Average = 0;
    case Burly = 1;
    case Thick = 2;

    public function name(): string
    {
        return match($this) {
            WeightClass::Thin => 'Thin',
            WeightClass::Average => 'Average',
            WeightClass::Burly => 'Burly',
            WeightClass::Thick => 'Thick'
        };
    }
}
