<?php

namespace App\Models\Team;

use App\Models\Player\Batter;
use App\Models\Player\Pitcher;
use App\Models\Player\Position;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Team\RosterPosition
 *
 * @property int $id
 * @property int|null $position_id
 * @property string $abbrv
 * @property string $name
 * @property string|null $description
 * @property-read Position|null $position
 * @method static \Illuminate\Database\Eloquent\Builder|RosterPosition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RosterPosition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RosterPosition query()
 * @method static \Illuminate\Database\Eloquent\Builder|RosterPosition whereAbbrv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RosterPosition whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RosterPosition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RosterPosition whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RosterPosition wherePositionId($value)
 * @mixin \Eloquent
 * @method static Builder|RosterPosition forBatters()
 * @method static Builder|RosterPosition forPitchers()
 */
class RosterPosition extends Model
{
    const STARTING_PITCHER1 = 1;
    const STARTING_PITCHER2 = 2;
    const STARTING_PITCHER3 = 3;
    const STARTING_PITCHER4 = 4;
    const STARTING_PITCHER5 = 5;
    const LONG_RELIEF_PITCHER = 6;
    const MIDDLE_RELIEF_PITCHER1 = 7;
    const MIDDLE_RELIEF_PITCHER2 = 8;
    const MIDDLE_RELIEF_PITCHER3 = 9;
    const MIDDLE_RELIEF_PITCHER4 = 10;
    const SETUP_PITCHER1 = 11;
    const SETUP_PITCHER2 = 12;
    const CLOSING_PITCHER = 13;
    const CATCHER = 14;
    const FIRST_BASEMAN = 15;
    const SECOND_BASEMAN = 16;
    const THIRD_BASEMAN = 17;
    const SHORTSTOP = 18;
    const LEFT_FIELDER = 19;
    const CENTER_FIELDER = 20;
    const RIGHT_FIELDER = 21;
    const BACKUP_CATCHER = 22;
    const DESIGNATED_HITTER = 23;
    const BACKUP_INFIELDER = 24;
    const BACKUP_OUTFIELDER = 25;
    const BACKUP_INFIELDER2 = 26;

    use HasFactory;

    protected $fillable = ['position_id', 'abbrv', 'name'];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function randomizePositionIfMissing()
    {
        if ($this->position === null) {

            $position_id = match($this->abbrv) {
                'DH' => mt_rand(Position::CATCHER, Position::RIGHT_FIELDER),
                'OF' => mt_rand(Position::LEFT_FIELDER, Position::RIGHT_FIELDER),
                default => mt_rand(Position::FIRST_BASEMAN, Position::SHORTSTOP)
            };

            $this->position = Position::find($position_id);
        }
    }

    public function getPlayerModel(): string
    {
        return $this->position->id == Position::PITCHER ? Pitcher::class : Batter::class;
    }

    public function scopeForBatters(Builder $query)
    {
        return $query->where('id', '>=', RosterPosition::CATCHER);
    }

    public function scopeForPitchers(Builder $query)
    {
        return $query->where('id', '<=', RosterPosition::CLOSING_PITCHER);
    }
}
