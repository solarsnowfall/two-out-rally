<?php

namespace App\Models\Team;

use App\Models\League;
use App\Models\Player\Batter;
use App\Models\Player\Pitcher;
use App\Models\Player\Player;
use App\Models\Player\Position;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;
use SebastianBergmann\Diff\Line;

/**
 * App\Models\Team\Team
 *
 * @property int $id
 * @property int|null $user_id
 * @property int $league_id
 * @property string $division
 * @property string $sub_division
 * @property string $name
 * @property int $wins
 * @property int $losses
 * @property string $city
 * @property string $state
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Team\Bullpen|null $bullpen
 * @property-read League $league
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team\Lineup[] $lineups
 * @property-read int|null $lineups_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Player[] $players
 * @property-read int|null $players_count
 * @method static \Illuminate\Database\Eloquent\Builder|Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team query()
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereDivision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereLeagueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereLosses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereSubDivision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereWins($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Team\Gambit[] $gambits
 * @property-read int|null $gambits_count
 */
class Team extends Model
{
    use HasFactory;

    protected $casts = [
        'default_lineup' => 'array'
    ];

    private Lineup $lineup;

    private ?Intangibles $intangibles = null;

    public function getLineup(): Lineup
    {
        return $this->lineup;
    }

    public function league()
    {
        return $this->belongsTo(League::class);
    }

    public function players()
    {
        return $this->hasManyThrough(
            Player::class,
            TeamPlayer::class,
            'team_id',
            'id',
            'id',
            'id'
        );
    }

    public function batters()
    {
       return $this->players->where('type', 'like', Batter::class);
    }

    public function pitchers()
    {
        return $this->players->where('type', 'like', Pitcher::class);
    }

    public function bullpen()
    {
        return $this->hasOne(Bullpen::class);
    }

    public function lineups()
    {
        return $this->hasMany(Lineup::class);
    }

    public function gambits()
    {
        return $this->hasMany(Gambit::class)->orderBy('priority', 'ASC');
    }

    public function intangibles(): Intangibles
    {
        if ($this->intangibles === null) {
            $this->intangibles = new Intangibles();
            /** @var Player $player */
            foreach ($this->players as $player) {
                $this->intangibles->consume($player->personality);
            }
        }

        return $this->intangibles;
    }

    public function setLineupForPitcher(Pitcher $pitcher)
    {
        $this->lineup = $this->lineupForPitcher($pitcher);
    }

    public function lineupForPitcher(Pitcher $pitcher)
    {
        if (count($this->lineups) === 1) {
            return $this->lineups->first();
        }

        return $this->lineups->where('handedness', '=', $pitcher->handedness)
            ->where('focus', '=', $pitcher->skill->focus())
            ->get();

    }

    public function startingPitcher(int $game_num)
    {
        $game_num %= 4;
        return $this->bullpen->pitchers(
            RosterPosition::STARTING_PITCHER1 + $game_num
        );
    }

    public function playerForPosition(RosterPosition|int $position)
    {
        return TeamPlayer::forTeam($this)->withPosition($position)->first()->player;
    }
}
