<?php

namespace App\Models\Player\Skill;

use App\Models\Player\Batter;
use App\Models\Player\Pitcher;
use App\Models\Player\Player;
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
    protected bool $normalized = false;

    public function playerEffort()
    {
        return $this->belongsTo(PlayerEffort::class);
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function focus(): Focus
    {
        if ($this->focus === null) {
            $this->focus = $this->resolveFocus();
        }

        return $this->focus;
    }

    /**
     * @param PlayerSkill $average
     * @return void
     */
    public function normalize(PlayerSkill $average): void
    {
        if ($this->normalized) {
            return;
        }

        foreach (static::skillAttributes() as $attribute) {
            $this->$attribute = $this->normalizedSkill($attribute, $average);
        }

        $this instanceof PitcherSkill
            ? $this->normalizePitchingEffort()
            : $this->penalizeOffPosition();

        $this->normalized = true;
    }

    /**
     * @param string $attribute
     * @param PlayerSkill $average
     * @return int
     */
    protected function normalizedSkill(string $attribute, PlayerSkill $average): int
    {
        $skill = $this->$attribute;

        if (!$this->player->user_id) {
            $skill *= 3 / 4;
        }

        $normalized = floor(($skill / $average->$attribute / 2) * 100);
        $normalized += floor(($this->player->moxie - 50) / 10);

        return max(min($normalized, 100), 0);
    }

    protected function normalizePitchingEffort()
    {
        $offset = abs($this->playerEffort->id - PlayerEffort::PITCHING_NORMAL) * 10;

        if ($this->playerEffort->id < PlayerEffort::PITCHING_NORMAL) {
            $offset = min($this->power, $offset);
            $this->stamina += $offset;
            $this->power -= $offset;
        } elseif ($this->playerEffort->id > PlayerEffort::PITCHING_NORMAL) {
            $offset = min($this->stamina, $offset);
            $this->stamina -= $offset;
            $this->power += $offset;
        }
    }

    protected function penalizeOffPosition()
    {
        if ($this->player->offPosition()) {
            foreach (static::skillAttributes() as $attribute) {
                $this->$attribute -= ceil($this->$attribute / 10);
            }
        }
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

    /**
     * @return int
     */
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
