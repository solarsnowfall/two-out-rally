<?php

namespace App\Models\Player;

use App\Models\Team\RosterPosition;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Player\Position
 *
 * @property int $id
 * @property string $abbrv
 * @property string $name
 * @property string|null $description
 * @property array $size_offsets
 * @property-read \Illuminate\Database\Eloquent\Collection|RosterPosition[] $rosterPositions
 * @property-read int|null $roster_positions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Position newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Position newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Position query()
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereAbbrv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereSizeOffsets($value)
 * @mixin \Eloquent
 */
class Position extends Model
{
    const PITCHER = 1;
    const CATCHER = 2;
    const FIRST_BASEMAN = 3;
    const SECOND_BASEMAN = 4;
    const THIRD_BASEMAN = 5;
    const SHORTSTOP = 6;
    const LEFT_FIELDER = 7;
    const CENTER_FIELDER = 8;
    const RIGHT_FIELDER = 9;
    const P = self::PITCHER;
    const C = self::CATCHER;
    const FB = self::FIRST_BASEMAN;
    const SB = self::SECOND_BASEMAN;
    const TB = self::THIRD_BASEMAN;
    const SS = self::SHORTSTOP;
    const LF = self::LEFT_FIELDER;
    const CF = self::CENTER_FIELDER;
    const RF = self::RIGHT_FIELDER;

    use HasFactory;

    protected $casts = [
        'size_offsets' => 'array'
    ];

    protected $fillable = ['abbrv', 'name', 'description'];

    public function rosterPositions()
    {
        return $this->hasMany(RosterPosition::class);
    }

    public function randomPlayerHeight(): array
    {
        $class = $this->sizeClass();
        $inches = mt_rand(66 + ($class + 1) * 4, 69 + ($class + 1) * 4);

        return ['class' => $class, 'inches' => $inches];
    }

    public function randomPlayerWeight(int $inches): array
    {
        $class = $this->sizeClass();
        $min = floor(140 + 4.375 * ($inches - 66));
        $max = floor(180 + 7.5 * ($inches - 66));
        echo "$min $max\n";

        $pounds = mt_rand(
            floor($min + ($class + 1) * ($max - $min) / 4),
            ceil($min + ($class + 2) * ($max - $min) / 4)
        );

        return ['class' => $class, 'pounds' => $pounds];
    }

    private function sizeClass(): int
    {
        return $this->size_offsets[mt_rand(0, count($this->size_offsets) - 1)];
    }
}
