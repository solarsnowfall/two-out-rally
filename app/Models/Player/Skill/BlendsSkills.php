<?php

namespace App\Models\Player\Skill;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

trait BlendsSkills
{
    /**
     * @var bool
     */
    private bool $normalized = false;


    /**
     * @param PlayerSkill $average
     * @return void
     */
    public function normalize(PlayerSkill $average): void
    {
        if ($this->normalized) {
            return;
        }

        foreach (static::skillAttributes() as $skill) {
            $this->$skill = $this->normalizedSkill($skill, $average);
        }

        $this->normalized = true;
    }

    /**
     * @param string $name
     * @param PlayerSkill $average
     * @return int
     */
    protected function normalizedSkill(string $name, PlayerSkill $average): int
    {
        $skill = $this->$name;

        if (!$this->player->user_id) {
            $skill *= 3 / 4;
        }

        $normalized = round(($skill / $average->$name / 2) * 100);

        return min($normalized, 100);
    }

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
