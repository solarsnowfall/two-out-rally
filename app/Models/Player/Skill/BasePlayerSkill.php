<?php

namespace App\Models\Player\Skill;

use App\Models\Player\Batter;
use App\Models\Player\Pitcher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

abstract class BasePlayerSkill extends Model
{
    use HasFactory;
    use BlendsSkills;
    use DescribesSkill;

    protected ?Focus $focus;

    public function effort()
    {
        return $this->belongsTo(PlayerEffort::class);
    }

    public function focus(): Focus
    {
        if ($this->focus === null) {
            $this->focus = $this->resolveFocus();
        }

        return $this->focus;
    }

    /**
     * @return array
     */
    public static function skillAttributes(): array
    {
        $key = Str::plural(Str::snake(class_basename(static::class)));
        $key = substr($key, 0, -1) . '_attributes';


        $attributes = Cache::get($key, []);

        if (!empty($attributes)) {
            return $attributes;
        }

        $playerClass = $key === 'batter_skill_attributes' ? Batter::class : Pitcher::class;

        foreach (Skill::skillsFor($playerClass) as $skill) {
            $attributes[] = $skill->attribute;
        }

        Cache::put($key, $attributes, 60*24);

        return $attributes;
    }

    public function pointsAssigned(): int
    {
        $total = 0;

        foreach (static::skillAttributes() as $attribute) {
            $total += $this->$attribute;
        }

        return $total;
    }

    protected abstract function resolveFocus(): Focus;
}
