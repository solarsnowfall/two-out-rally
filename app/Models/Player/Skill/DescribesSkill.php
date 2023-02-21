<?php

namespace App\Models\Player\Skill;

use App\Player\Skill\SkillFocus;
use Illuminate\Support\Facades\DB;

trait DescribesSkill
{
    /**
     * @var Skill[]|PlayerEffort[]
     */
    private static array $skillModels = [];

    /**
     * @param $method
     * @param $parameters
     * @return Skill|mixed
     */
    public function __call($method, $parameters)
    {
        if ($method === 'effort') {
            if (!array_key_exists($method, static::$skillModels)) {
                static::$skillModels[$method] = PlayerEffort::where('type', 'like', addslashes(static::class))
                    ->whereLevel($this->effort)
                    ->first();
            }
            return static::$skillModels[$method];
        }

        if (in_array($method, static::skillAttributes())) {
            if (!array_key_exists($method, static::$skillModels)) {
                static::$skillModels[$method] = Skill::whereAttribute($method)->first();
            }
            return static::$skillModels[$method];
        }

        return parent::__call($method, $parameters);
    }
}
