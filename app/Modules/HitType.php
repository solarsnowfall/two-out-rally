<?php

namespace App\Modules;

enum HitType: string
{
    case BaseHit = 'base hit';
    case FlyBall = 'fly ball';
    case GroundBall = 'ground ball';
    case LineDrive = 'line drive';
    case PopUp = 'pop up';

    public function outType(): ?string
    {
        return match($this) {
            HitType::BaseHit => null,
            HitType::FlyBall => 'flyout',
            HitType::GroundBall => 'groundout',
            HitType::LineDrive => 'lineout',
            HitType::PopUp => 'pop out'
        };
    }
}
