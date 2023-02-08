<?php

namespace App\Modules;

enum AtBatOutcome: string
{
    case Hit = 'hit';
    case Strikeout = 'strikeout';
    case Walk = 'walk';

    public function pitchCount(): int
    {
        $range = match($this) {
            AtBatOutcome::Walk => [4,4,5,5,5,6,6,7,7,8],
            AtBatOutcome::Strikeout => [3,3,4,4,5,5,6,6,7,8],
            default => [1,2,2,2,3,3,3,3,4,4,4,4,5,5,5,6,6,7,7,8]
        };

        return $range[mt_rand(0, count($range) - 1)];
    }
}
