<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Season
 *
 * @property int $id
 * @property int $day
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $completed_at
 * @method static \Illuminate\Database\Eloquent\Builder|Season newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Season newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Season query()
 * @method static \Illuminate\Database\Eloquent\Builder|Season whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Season whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Season whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Season whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Season whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property array $day_order
 * @method static \Database\Factories\SeasonFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Season whereDayOrder($value)
 */
class Season extends Model
{
    use HasFactory;

    protected $casts = [
        'day_order' => 'json'
    ];

    public static function currentSeason(): Season
    {
        return Season::orderBy('id', 'desc')->first();
    }

    /**
     * @return bool
     */
    public function isCurrent(): bool
    {
        return self::orderBy('id', 'desc')->first(['id'])->id === $this->id;
    }

    public function dayOffset(): int
    {
        return $this->day_order[$this->day];
    }
}
