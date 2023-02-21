<?php

namespace App\Models\GameChanger;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\GameChanger\BatterSkill
 *
 * @property int $id
 * @property int $game_changer_id
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
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill query()
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereAccuracy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereArmStrength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereBatControl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereDiscipline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereFlyBall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereGameChangerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereGrace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereGroundBall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereLineDrive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereLowerBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill wherePull($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereReaction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BatterSkill whereSpeed($value)
 * @mixin \Eloquent
 */
class BatterSkill extends Model
{
    use HasFactory;

    protected $table = 'game_changer_batter_skills';
}
