<?php

namespace App\Models\Player\Skill;

trait DescribesSkill
{
    /**
     * @var Skill[]
     */
    private array $skillModels = [];

    public function __call($method, $parameters)
    {
        if ($this->getAttribute($method) && in_array($method, static::skillAttributes())) {

            if (!array_key_exists($method, $this->skillModels)) {
                $this->skillModels[$method] = Skill::whereAttribute($method)->first();
            }

            return $this->skillModels[$method];
        }

        return parent::__call($method, $parameters);
    }
}
