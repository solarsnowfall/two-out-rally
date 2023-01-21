<?php

namespace App\Models\Player;

use App\Modules\SkillBlender;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Player\BatterSkill
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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
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
 */
class BatterSkill extends Model
{
    use HasFactory;
    use SkillBlender;

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

    public function getAvoidStrikeout(): int
    {
        return $this->skillBlender($this->bat_control, $this->ground_ball, $this->reaction);
    }

    public function getBaseRunning(): int
    {
        return $this->skillBlender($this->speed, $this->discipline);
    }

    public function getBlockPlate(): int
    {
        return $this->skillBlender($this->lower_body, $this->reaction);
    }

    public function getDefensiveRange(): int
    {
        return $this->skillBlender($this->grace, $this->speed);
    }

    public function getExtraBases(BatterSkill $batterSkill): float
    {
        $skill = $this->getThrowingStrength() * 0.2;
        $skill -= $batterSkill->getBaseRunning() * 0.2;

        return $skill / 100;
    }

    public function getFieldCleanly(): int
    {
        return $this->skillBlender($this->reaction, $this->grace, $this->lower_body);
    }

    public function getFieldLineDrive(): float
    {
        $skill = $this->getFieldCleanly() * 0.15;
        $skill += $this->getDefensiveRange() * 0.05;

        return $skill / 100;
    }

    public function getFieldLineDriveOutfield(BatterSkill $batterSkill): float
    {
        $skill = $this->getDefensiveRange() * 0.15;
        $skill += $this->getFieldCleanly() * 0.05;
        $skill -= $batterSkill->getLineDrivePower() * 0.2;

        return $skill / 100;
    }

    public function getFlyBall(): int
    {
        return $this->skillBlender($this->fly_ball, $this->reaction);
    }

    public function getFlyBallPower(int $bonus = 0): int
    {
        return $this->skillBlender($this->pull, $this->fly_ball) + $bonus;
    }

    public function getGrounder(): int
    {
        return $this->skillBlender($this->ground_ball, $this->speed, $this->lower_body);
    }

    public function getLiner(): int
    {
        return $this->skillBlender($this->line_drive, $this->accuracy, $this->pull);
    }

    public function getLineDrivePower(): int
    {
        return $this->skillBlender($this->arm_strength, $this->bat_control);
    }

    public function getThrowingStrength(): int
    {
        return $this->skillBlender($this->arm_strength, $this->grace);
    }

    public function getWalk(): int
    {
        return $this->skillBlender($this->discipline, $this->lower_body);
    }
}
