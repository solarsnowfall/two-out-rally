<?php

namespace App\Models\Player\Skill;

trait HasFocus
{
    public function focus()
    {
        if ($this instanceof BatterSkill) {
            return $this->batterFocus();
        }

        return $this->pitcherFocus();
    }

    protected function batterFocus()
    {
        $skillGroups = [[
            'line_drive',
            'reaction',
            'discipline',
            'bat_control'
        ], [
            'fly_ball',
            'lower_body',
            'pull',
            'arm_strength'
        ], [
            'speed',
            'grace',
            'ground_ball',
            'accuracy'
        ]];

        $focus = [0, 0, 0];

        foreach ($skillGroups as $key => $skills) {
            foreach ($skills as $skill) {
                $focus[$key] += $this->$skill;
            }
        }


    }
}
