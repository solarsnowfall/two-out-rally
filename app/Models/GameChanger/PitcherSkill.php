<?php

namespace App\Models\GameChanger;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\GameChanger\PitcherSkill
 *
 * @property int $id
 * @property int $game_changer_id
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
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill query()
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereDelivery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereExplosiveness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereGameChangerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereHorizontalBreak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereInduceGrounder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereInducePopup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereMechanics($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill wherePaintCorner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill wherePickoff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill wherePower($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereRelease($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereStamina($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PitcherSkill whereVerticalBreak($value)
 * @mixin \Eloquent
 */
class PitcherSkill extends Model
{
    use HasFactory;

    protected $table = 'game_changer_pitcher_skills';
}
