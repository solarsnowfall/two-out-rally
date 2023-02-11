<?php

namespace App\Modules;

enum BaseProgression: string
{
    case Single = 'single';
    case Double = 'double';
    case Triple = 'triple';
    case HomeRun = 'home run';
}
