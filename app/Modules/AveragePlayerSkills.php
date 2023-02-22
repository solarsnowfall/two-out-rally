<?php

namespace App\Modules;

use App\Models\League;
use App\Models\Player\Batter;
use App\Models\Player\Pitcher;
use App\Models\Player\Skill\BatterSkill;
use App\Models\Player\Skill\PitcherSkill;
use App\Models\Player\Skill\PlayerSkill;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use InvalidArgumentException;

class AveragePlayerSkills
{
    public string $class;
    public League $league;
    public PlayerSkill $skill;
    public string $skillClass;
    public string $skillTable;


    public function __construct(League $league, string $class)
    {
        if ($class !== Batter::class && $class !== Pitcher::class) {
            throw new InvalidArgumentException(
                'Invalid argument supplied for class parameter, expected: ' .
                Batter::class . ' or ' . Pitcher::class . ", got $class"
            );
        }

        $this->league = $league;
        $this->class = $class;
        $this->skillClass = $class === Batter::class ? BatterSkill::class : PitcherSkill::class;
        $this->skillTable = Str::snake(class_basename($this->skillClass)) . 's';
        $this->skill = $this->getAverageSkills();
    }

    public function getAverageSkills(): PlayerSkill
    {
        $key = implode('_', [
            $this->league->id,
            strtolower(class_basename($this->class)),
            'averaged_skills'
        ]);

        $attributes = Cache::get($key, false);

        if ($attributes !== false) {
            return new $this->skillClass($attributes);
        }

        $attributes = $this->fetchAveragedAttributes();
        Cache::set($key, $attributes, 60*60);

        return new $this->skillClass($attributes);
    }

    private function fetchAveragedAttributes()
    {
        $columns = forward_static_call([$this->skillClass, 'skillAttributes']);

        $skills = forward_static_call([$this->skillClass, 'select'], $columns)
            ->leftJoin('team_players', "{$this->skillTable}.id", '=', 'team_players.player_id')
            ->leftJoin('teams', 'team_players.team_id', '=', 'teams.id')
            ->leftJoin('leagues', 'leagues.id', '=', 'teams.league_id')
            ->where('leagues.id', '=', $this->league->id)
            ->get()->toArray();

        $totals = array_fill_keys($columns, 0);

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
