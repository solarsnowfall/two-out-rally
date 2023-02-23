<?php

namespace App\Models\Team;

use App\Models\Player\Batter;
use App\Modules\AveragePlayerSkills;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team\LineupBatter[] $lineupBatters
 * @property-read int|null $lineup_batters_count
 */
class Lineup extends Model
{
    use HasFactory;

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var Batter[]
     */
    protected array $batters = [];

    /**
     * @var int
     */
    protected int $batting_order = 0;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|Team
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function batters(?int $batting_order = null)
    {
        if (!count($this->batters)) {
            foreach ($this->lineupBatters as $lineupPlayer) {
                $this->batters[$lineupPlayer->batting_order] = $lineupPlayer->batter;
            }
            ksort($this->batters);
        }

        return $batting_order === null ? $this->batters : $this->batters[$batting_order];
    }

    /**
     * @return HasMany|LineupBatter[]
     */
    public function lineupBatters(): HasMany|array
    {
       return $this->hasMany(LineupBatter::class);
    }

    public function nextBatter()
    {
        $batter = $this->batters($this->batting_order);
        $this->batting_order += 10;
        $this->batting_order %= 9;

        return $batter;
    }

    public function normalize()
    {
        $average = new AveragePlayerSkills($this->team->league, Batter::class);

        /** @var Batter $batter */
        foreach ($this->batters() as $batter) {
            $batter->skill->normalize($average->skill);
        }
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
