<?php

namespace App\Modules;

use App\Models\Player\Pitcher;
use App\Models\Player\Skill\Focus;

enum PitchType: string
{
    case Changeup = 'Changeup';
    case CircleChange = 'Circle Change';
    case Curveball = 'Curveball';
    case Cutter = 'Cutter';
    case Forkball = 'Forkball';
    case FourSeamFastball = 'Four Seam Fastball';
    case KnuckleCurve = 'Knuckle Curve';
    case Palmball = 'Palmball';
    case Screwball = 'Screwball';
    case Sinker = 'Sinker';
    case Slider = 'Slider';
    case Slurve = 'Slurve';
    case Splitter = 'Splitter';
    case TwoSeamFastball = 'Two Seam Fastball';
    case TwoSixCurveball = 'Two-Six Curveball';
    case VulcanChange = 'Vulcan Change';
}
