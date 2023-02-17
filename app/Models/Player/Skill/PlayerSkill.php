<?php

namespace App\Models\Player\Skill;

interface PlayerSkill
{

    public function focus();

    public function normalize(PlayerSkill $average): void;
}
