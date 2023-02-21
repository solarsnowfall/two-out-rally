<?php

namespace App\Models\Player\Skill;

trait HasSkillFocus
{
    public function __call($method, $parameters)
    {
        $attributes = static::skillAttributes();



        return parent::__call($method, $parameters);
    }
}
