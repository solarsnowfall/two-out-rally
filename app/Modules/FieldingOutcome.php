<?php

namespace App\Modules;

enum FieldingOutcome: string
{
    case GroundOut = 'groundout';
    case FlyOut = 'flyout';
    case PopUp = 'pop up';
    case ThrowingError = 'throwing error';
}
