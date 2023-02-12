<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Lineup
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $team_id
 * @property int $game
 * @property string $roster_position_order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup whereGame($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup whereRosterPositionOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup whereUpdatedAt($value)
 */
class Lineup extends Model
{
    use HasFactory;
}
