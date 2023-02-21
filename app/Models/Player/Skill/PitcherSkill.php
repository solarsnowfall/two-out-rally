<?php

namespace App\Models\Player\Skill;

use App\Models\Player\Pitcher;
use App\Modules\PitcherFocus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Player\PitcherSkill
 *
 * @property int $id
 * @property int $player_id
 * @property string $effort
 * @property int $stamina
 * @property int $mechanics
 * @property int $paint_corner
 * @property int $induce_grounder
 * @property int $vertical_break
 * @property int $release
 * @property int $horizontal_break
 * @property int $induce_popup
 * @property int $power
 * @property int $delivery
 * @property int $explosiveness
 * @property int $pickoff
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill query()
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereDelivery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereEffort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereExplosiveness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereHorizontalBreak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereInduceGrounder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereInducePopup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereMechanics($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill wherePaintCorner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill wherePickoff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill wherePlayerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill wherePower($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereRelease($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereStamina($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereVerticalBreak($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Player\Pitcher $player
 * @property int $player_effort_id
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill wherePlayerEffortId($value)
 */
class PitcherSkill extends BasePlayerSkill implements PlayerSkill
{
    protected $fillable = [
        'player_id',
        'stamina',
        'mechanics',
        'paint_corner',
        'induce_grounder',
        'vertical_break',
        'release',
        'horizontal_break',
        'induce_popup',
        'power',
        'delivery',
        'explosiveness',
        'pickoff'
    ];

    public function player()
    {
        return $this->belongsTo(Pitcher::class);
    }

    public function pitcher()
    {
        return $this->player;
    }

    public function avoidFlyBallPower(): int
    {
        return $this->blend($this->induce_popup, $this->induce_grounder);
    }

    public function avoidGrounder(): int
    {
        return $this->blend($this->release, $this->pickoff, $this->explosiveness);
    }

    public function avoidLiner(): int
    {
        return $this->blend($this->horizontal_break, $this->induce_grounder, $this->paint_corner);
    }

    public function avoidWalk(): int
    {
        return $this->blend($this->paint_corner, $this->mechanics, $this->release);
    }

    public function avoidWildPitch(): int
    {
        return $this->blend($this->mechanics, $this->vertical_break);
    }

    public function strikeout(): int
    {
        return $this->blend($this->power, $this->explosiveness, $this->vertical_break);
    }

    public function control()
    {
        return $this->stamina + $this->mechanics + $this->paint_corner + $this->induce_grounder;
    }

    public function movement()
    {
        return $this->vertical_break + $this->release + $this->horizontal_break + $this->induce_popup;
    }

    public function velocity()
    {
        return $this->power + $this->delivery + $this->explosiveness + $this->pickoff;
    }

    public function focus(): Focus
    {
        if ($this->focus === null) {
            $this->focus = $this->resolveFocus();
        }

        return $this->focus;
    }

    protected function resolveFocus(): Focus
    {
        if ($this->control() > $this->movement() && $this->control() > $this->velocity()) {
            return Focus::find(Focus::CONTROL);
        } elseif ($this->movement() > $this->control() && $this->movement() > $this->velocity()) {
            return Focus::find(Focus::MOVEMENT);
        } elseif ($this->velocity() > $this->control() && $this->velocity() > $this->movement()) {
            return Focus::find(Focus::VELOCITY);
        }

        return Focus::find(Focus::BALANCED);
    }
}
