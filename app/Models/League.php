<?php

namespace App\Models;

use App\Models\Team\Team;
use App\Modules\Chance;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\League
 *
 * @property int $id
 * @property string $type
 * @property string $controlled
 * @property string $level
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|League newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|League newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|League query()
 * @method static \Illuminate\Database\Eloquent\Builder|League whereControlled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|League whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|League whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|League whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|League whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|League whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team\Team[] $teams
 * @property-read int|null $teams_count
 */
class League extends Model
{
    use HasFactory;

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function randomPlayerAge(): int
    {
        return match ($this->level) {
            '1' => 24 - floor(sin(Chance::roll()) * 7),
            '2' => 26 - floor(sin(Chance::roll()) * 8),
            '3' => 30 - floor(sin(Chance::roll()) * 10),
            default => 40 - floor(sin(Chance::roll()) * 19),
        };
    }
}
