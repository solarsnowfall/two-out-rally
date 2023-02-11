<?php

namespace App\Models;

use App\Models\Player\Batter;
use App\Models\Player\BatterSkill;
use App\Models\Player\Pitcher;
use App\Models\Player\PitcherSkill;
use App\Models\Player\Player;
use App\Models\Player\Skill;
use App\Models\Team\Team;
use App\Modules\Chance;
use Illuminate\Support\Facades\DB;
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
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Matchup[] $matchups
 * @property-read int|null $matchups_count
 */
class League extends Model
{
    use HasFactory;

    private ?BatterSkill $averageBatterSkills = null;

    private ?PitcherSkill $averagePitcherSkills = null;

    public function teams()
    {
        return $this->hasmany(Team::class);
    }

    /**
     * @return int
     */
    public function randomPlayerAge(): int
    {
        return match ($this->level) {
            '1' => 24 - floor(sin(Chance::roll()) * 7),
            '2' => 26 - floor(sin(Chance::roll()) * 8),
            '3' => 30 - floor(sin(Chance::roll()) * 10),
            default => 40 - floor(sin(Chance::roll()) * 19)
        };
    }

    public function averagePlayerLevel(): int
    {
        return floor(($this->minPlayerLevel() + $this->maxPlayerLevel()) / 2);
    }

    public function matchups()
    {
        return $this->hasMany(Matchup::class);
    }

    public function maxPlayerLevel(): int
    {
        return $this->level * 10;
    }

    public function minPlayerLevel(): int
    {
        return $this->maxPlayerLevel() - 9;
    }

    /**
     * @return int
     */
    public function randomPlayerLevel(): int
    {
        return mt_rand($this->minPlayerLevel(), $this->maxPlayerLevel());
    }

    public function batterSkills()
    {
        return Player::with('team_players.teams.leagues')->get();
    }

    public function getAverageBatterSkills(): BatterSkill
    {
        if ($this->averageBatterSkills === null) {
            $columns = array_map(function($skill){
                return $skill->label;
            }, Skill::skillsFor(Batter::class));

            $skills = BatterSkill::select($columns)
                ->leftJoin('team_players', 'batter_skills.id', '=', 'team_players.player_id')
                ->leftJoin('teams', 'team_players.team_id', '=', 'teams.id')
                ->where('teams.league_id', '=', $this->id)
                ->get()->toArray();

            $this->averageBatterSkills = new BatterSkill($this->averageSkills($skills));
        }

        return $this->averageBatterSkills;
    }

    public function getAveragePitcherSkills(): PitcherSkill
    {
        if ($this->averagePitcherSkills === null) {
            $columns = array_map(function($skill){
                return $skill->label;
            }, Skill::skillsFor(Pitcher::class));

            $skills = PitcherSkill::select($columns)
                ->leftJoin('team_players', 'pitcher_skills.id', '=', 'team_players.player_id')
                ->leftJoin('teams', 'team_players.team_id', '=', 'teams.id')
                ->where('teams.league_id', '=', $this->id)
                ->get()->toArray();

            $this->averagePitcherSkills = new PitcherSkill($this->averageSkills($skills));
        }

        return $this->averagePitcherSkills;
    }

    protected function averageSkills(array $skills): array
    {
        $totals = array_fill_keys(array_keys($skills[key($skills)]), 0);

        foreach ($skills as $row) {
            foreach ($row as $column => $value) {
                $totals[$column] += $value;
            }
        }

        $attributes = [];

        foreach ($totals as $column => $value) {
            $attributes[$column] = round($value / count($skills), 2);
        }

        return $attributes;
    }
}
