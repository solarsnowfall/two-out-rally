<?php

namespace App\Models\Team;

use App\Models\Player\Position;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 */
class RosterPosition extends Model
{
    use HasFactory;

    protected $fillable = ['position_id', 'abbrv', 'name'];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
