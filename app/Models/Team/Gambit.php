<?php

namespace App\Models\Team;

use App\Models\Player\Position;
use App\Models\Player\Skill\Focus;
use App\Sim\Game;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Team\Gambit
 *
 * @property int $id
 * @property int $team_id
 * @property int $priority
 * @property string $type
 * @property int $position_id
 * @property int $sub_roster_position_id
 * @property int $bu_sub_roster_position_id
 * @property string $name
 * @property int|null $base
 * @property string $relief_reason
 * @property string $leverage
 * @property int $outs
 * @property int $inning
 * @property object $on_base
 * @property string|null $handedness
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Team\RosterPosition $backupSubstitutePosition
 * @property-read Focus $focus
 * @property-read Position $position
 * @property-read \App\Models\Team\RosterPosition $substitutePosition
 * @property-read \App\Models\Team\Team $team
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit whereBase($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit whereBuSubRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit whereHandedness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit whereInning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit whereLeverage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit whereOnBase($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit whereOuts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit wherePositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit whereReliefReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit whereSubRosterPositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int|null $focus_id
 * @method static \Illuminate\Database\Eloquent\Builder|Gambit whereFocusId($value)
 */
class Gambit extends Model
{
    use HasFactory;

    public bool $applied = false;

    protected $casts = [
        'on_base' => 'object'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function focus()
    {
        return $this->belongsTo(Focus::class);
    }

    public function substitutePosition()
    {
        return $this->belongsTo(RosterPosition::class, 'sub_roster_position_id', 'id');
    }

    public function backupSubstitutePosition()
    {
        return $this->belongsTo(RosterPosition::class, 'bu_sub_roster_position_id', 'id');
    }


}
