<?php

namespace App\Modules;

enum HeightClass: int
{
    case Short = -1;
    case Average = 0;
    case Tall = 1;
    case Towering = 2;

    public function name()
    {
        return match($this) {
            HeightClass::Short => 'Short',
            HeightClass::Average => 'Average',
            HeightClass::Tall => 'Tall',
            HeightClass::Towering => 'Towering'
        };
    }
}
