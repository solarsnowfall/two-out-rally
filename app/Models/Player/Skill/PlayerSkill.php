<?php

namespace App\Models\Player\Skill;

interface PlayerSkill
{
    public function focus(): Focus;

    public function normalize(PlayerSkill $average): void;

    public function pointsAssigned(): int;
}
