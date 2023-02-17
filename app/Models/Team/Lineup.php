<?php

namespace App\Models\Team;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Team\Lineup
 *
 * @property int $id
 * @property int $team_id
 * @property string|null $focus
 * @property string|null $handedness
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team\LineupBatter[] $lineupPlayers
 * @property-read int|null $lineup_players_count
 * @property-read \App\Models\Team\Team $team
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup query()
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup whereFocus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup whereHandedness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lineup whereTeamId($value)
 * @mixin \Eloquent
 */
class Lineup extends Model
{
    use HasFactory;

    protected int $position = 1;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function lineupPlayers()
    {
        return $this->hasMany(LineupBatter::class);
    }

    public function nextBatter()
    {
        $batter = $this->lineupPlayers->where('batting_order', '=', $this->position+1)->first();
        $this->position++;
        $this->position %= 9;

        return $batter->batter;
    }

    public function reset()
    {
        $this->position = 0;
    }

    public function fielderForPosition(int $roster_position_id)
    {
        return  $this->lineupPlayers
                    ->where('roster_position_id', '=', $roster_position_id)
                    ->first()
                    ->batter;
    }

    public function catcher()
    {
        return $this->fielderForPosition(RosterPosition::CATCHER);
    }

    public function firstBaseman()
    {
        return $this->fielderForPosition(RosterPosition::FIRST_BASEMAN);
    }

    public function secondBaseman()
    {
        return $this->fielderForPosition(RosterPosition::SECOND_BASEMAN);
    }

    public function shortstop()
    {
        return $this->fielderForPosition(RosterPosition::SHORTSTOP);
    }

    public function thirdBaseman()
    {
        return $this->fielderForPosition(RosterPosition::THIRD_BASEMAN);
    }

    public function leftFielder()
    {
        return $this->fielderForPosition(RosterPosition::LEFT_FIELDER);
    }

    public function centerFielder()
    {
        return $this->fielderForPosition(RosterPosition::CENTER_FIELDER);
    }

    public function rightFielder()
    {
        return $this->fielderForPosition(RosterPosition::RIGHT_FIELDER);
    }
}