<?php

namespace App\Modules;

enum HitType: string
{
    case BaseHit = 'base hit';
    case FlyBall = 'fly ball';
    case GroundBall = 'ground ball';
    case LineDrive = 'line drive';
    case PopUp = 'pop up';
}
