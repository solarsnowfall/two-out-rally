<?php

namespace App\Modules;

use App\Models\League;
use App\Models\Player\Batter;
use App\Models\Player\BatterSkill;
use Illuminate\Database\Eloquent\Concerns\HasAttributes;
use Illuminate\Support\Facades\DB;

class AverageBatterSkills
{
    /**
     * @var BatterSkill
     */
    public BatterSkill $skill;

    /**
     * @var League
     */
    private League $league;

    /**
     * @param League $league
     */
    public function __construct(League $league)
    {
        $this->league = $league;
        $this->skill = $this->fetchAverages();
    }

    public function __get($name)
    {
        return $this->getAttribute($name);
    }

    public function __set($name, $value)
    {
        return $this->setAttribute($name, $value);
    }

    public function fetchAverages(): BatterSkill
    {
        DB::connection()->enableQueryLog();

        $columns = [
            'line_drive',
            'reaction',
            'discipline',
            'bat_control',
            'fly_ball',
            'lower_body',
            'pull',
            'arm_strength',
            'speed',
            'grace',
            'ground_ball',
            'accuracy'
        ];

        $skills = BatterSkill::select($columns)
            ->leftJoin('team_players', 'batter_skills.id', '=', 'team_players.player_id')
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

        return new BatterSkill($attributes);
    }
}
