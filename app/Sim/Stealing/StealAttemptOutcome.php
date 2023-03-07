<?php

namespace App\Sim\Stealing;

enum StealAttemptOutcome: string
{
    case Success = 'success';
    case CaughtStealing = 'caught_stealing';
}
