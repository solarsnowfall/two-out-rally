<?php

namespace App\Models\Player\Skill;

use App\Models\Player\Batter;
use App\Modules\BatterFocus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Carbon;

/**
 * App\Models\Player\Skill\BatterSkill
 *
 * @property int $id
 * @property int $player_id
 * @property string $stealing
 * @property int $line_drive
 * @property int $reaction
 * @property int $discipline
 * @property int $bat_control
 * @property int $fly_ball
 * @property int $lower_body
 * @property int $pull
 * @property int $arm_strength
 * @property int $speed
 * @property int $grace
 * @property int $ground_ball
 * @property int $accuracy
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Batter $player
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill query()
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereAccuracy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereArmStrength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereBatControl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereDiscipline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereFlyBall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereGrace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereGroundBall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereLineDrive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereLowerBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill wherePlayerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill wherePull($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereReaction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereStealing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $effort
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereEffort($value)
 * @property int $player_effort_id
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill wherePlayerEffortId($value)
 */
class BatterSkill extends BasePlayerSkill implements PlayerSkill
{
    protected $fillable = [
        'player_id',
        'line_drive',
        'reaction',
        'discipline',
        'bat_control',
        'fly_ball',
        'lower_body',
        'pull',
        'arm_strength',
        'speed',
        'grace',
        'ground_ball',
        'accuracy'
    ];

    public function player()
    {
        return $this->belongsTo(Batter::class);
    }

    public function batter()
    {
        return $this->player;
    }

    public function avoidStrikeout(): int
    {
        return $this->blend($this->bat_control, $this->ground_ball, $this->reaction);
    }

    public function baseRunning(): int
    {
        return $this->blend($this->speed, $this->discipline);
    }

    public function blockPlate(): int
    {
        return $this->blend($this->lower_body, $this->reaction);
    }

    public function defensiveRange(): int
    {
        return $this->blend($this->grace, $this->speed);
    }

    public function extraBases(Batter $fielder): float
    {
        $skill = $this->getThrowingStrength() * 0.2;
        $skill -= $fielder->skill->getBaseRunning() * 0.2;

        return $skill / 100;
    }

    public function fieldCleanly(): int
    {
        return $this->blend($this->reaction, $this->grace, $this->lower_body);
    }

    public function fieldLineDrive(): float
    {
        $skill = $this->getFieldCleanly() * 0.15;
        $skill += $this->getDefensiveRange() * 0.05;

        return $skill / 100;
    }

    public function fieldLineDriveOutfield(BatterSkill $batterSkill): float
    {
        $skill = $this->getDefensiveRange() * 0.15;
        $skill += $this->getFieldCleanly() * 0.05;
        $skill -= $batterSkill->getLineDrivePower() * 0.2;

        return $skill / 100;
    }

    public function flyBall(): int
    {
        return $this->blend($this->fly_ball, $this->reaction);
    }

    public function flyBallPower(int $bonus = 0): int
    {
        return $this->blend($this->pull, $this->fly_ball) + $bonus;
    }

    public function grounder(): int
    {
        return $this->blend($this->ground_ball, $this->speed, $this->lower_body);
    }

    public function liner(): int
    {
        return $this->blend($this->line_drive, $this->accuracy, $this->pull);
    }

    public function lineDrivePower(): int
    {
        return $this->blend($this->arm_strength, $this->bat_control);
    }

    public function throwingStrength(): int
    {
        return $this->blend($this->arm_strength, $this->grace);
    }

    public function walk(): int
    {
        return $this->blend($this->discipline, $this->lower_body);
    }

    public function vision(): int
    {
        return $this->line_drive + $this->reaction + $this->discipline + $this->bat_control;
    }

    public function muscle(): int
    {
        return $this->fly_ball + $this->lower_body + $this->pull + $this->arm_strength;
    }

    public function athleticism(): int
    {
        return $this->speed + $this->grace + $this->ground_ball + $this->accuracy;
    }

    protected function resolveFocus(): Focus
    {
        if ($this->vision() > $this->muscle() && $this->vision() > $this->athleticism()) {
            $this->focus = Focus::find(Focus::VELOCITY);
        } elseif ($this->muscle() > $this->vision() && $this->muscle() > $this->athleticism()) {
            $this->focus = Focus::find(Focus::MUSCLE);
        } elseif ($this->athleticism() > $this->vision() && $this->athleticism() > $this->muscle()) {
            $this->focus = Focus::find(Focus::ATHLETICISM);
        }

        return Focus::find(Focus::BALANCED);
    }
}
