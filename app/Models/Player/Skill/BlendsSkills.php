<?php

namespace App\Models\Player\Skill;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

trait BlendsSkills
{
    /**
     * @param int $skill1
     * @param int $skill2
     * @param int $skill3
     * @return int
     */
    protected function blend(int $skill1, int $skill2, int $skill3 = 0): int
    {
        return min(floor(($skill1 + $skill2/2 + $skill3/3) / 1.5), 100);
    }

    /**
     * @param array $options
     * @return bool
     */
    public function save(array $options = [])
    {
        if ($this->normalized) {
            return false;
        }

        return parent::save($options);
    }
}
