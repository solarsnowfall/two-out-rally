<?php

namespace App\Modules;

enum HitVector: string
{
    case A = 'a';
    case B = 'b';
    case C = 'c';
    case D = 'd';
    case E = 'e';
    case F = 'f';
    case G = 'g';

    public function description(int $distance): string
    {
        if ($distance < 3) {
            return match ($this) {
                HitVector::A => 'down the third base line',
                HitVector::B => 'to the gap at shortstop',
                HitVector::C => 'to shortstop',
                HitVector::D => 'to the gap up the middle',
                HitVector::E => 'to second base',
                HitVector::F => 'to the gap at second',
                HitVector::G => 'down the first base line'
            };
        }

        return $this->distancePrefix($distance) . match($this) {
            HitVector::A => ' left field line',
            HitVector::B => ' left field',
            HitVector::C => ' left-center',
            HitVector::D => ' center field',
            HitVector::E => ' right-center',
            HitVector::F => ' right field',
            HitVector::G => ' right field line'
        };
    }

    public function grid(): array
    {
        $grid = [];

        for ($i=0; $i<=6; $i++) {
            $grid[] = $this->value . $i;
        }

        return $grid;
    }

    public function gridPosition(int $distance): string
    {
        return $this->value . $distance;
    }

    protected function distancePrefix(int $distance): string
    {
        return match($distance) {
            1, 2 => '',
            3 => 'to shallow',
            4 => 'to medium',
            5, 6 => 'to deep'
        };
    }
}
