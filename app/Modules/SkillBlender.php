<?php

namespace App\Modules;

trait SkillBlender
{
    protected function skillBlender(int $skill1, int $skill2, int $skill3 = 0): int
    {
        return min(floor(($skill1 + $skill2/2 + $skill3/3) / 1.5), 100);
    }
}
