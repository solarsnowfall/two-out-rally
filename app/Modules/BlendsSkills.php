<?php

namespace App\Modules;

use App\Models\Player\BatterSkill;
use App\Models\Player\Pitcher;
use App\Models\Player\PitcherSkill;
use App\Models\Player\Skill;

trait BlendsSkills
{
    /**
     * @var bool
     */
    private bool $normalized = false;

    /**
     * @param BatterSkill $average
     * @return void
     */
    public function normalize(BatterSkill $average)
    {
        if ($this->normalized) {
            return;
        }

        foreach (Skill::skillsFor(static::class) as $skill) {
            $this->skill->{$skill->label} = $this->normalizedSkill($skill->label, $average);
        }

        $this->normalized = true;
    }

    /**
     * @param string $name
     * @param BatterSkill|PitcherSkill $average
     * @return int
     */
    protected function normalizedSkill(string $name, BatterSkill|PitcherSkill $average): int
    {
        $skill = $this->skill->$name;

        if (!$this->player) {
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
