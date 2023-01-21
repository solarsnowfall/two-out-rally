<?php

namespace App\Modules;

enum FieldPosition
{
    case Catcher;
    case FirstBase;
    case SecondBase;
    case ThirdBase;
    case Shortstop;
    case Pitcher;
    case LeftField;
    case CenterField;
    case RightField;
}
