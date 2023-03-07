<?php

namespace App\Modules;

enum FieldingOutcome: string
{
    case Double = 'double';
    case DroppedBall = 'drop ball';
    case FlyOut = 'flyout';
    case ForceOut = 'force out';
    case GroundOut = 'groundout';
    case InfieldSingle = 'infield single';
    case PopUp = 'popup';
    case Single = 'single';
    case ThrowingError = 'throwing error';
    case Triple = 'triple';
}
