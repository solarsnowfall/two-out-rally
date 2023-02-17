<?php

namespace App\Modules;

use App\Models\League;
use App\Models\Player\Batter;
use App\Models\Player\Skill\BatterSkill;
use App\Models\Player\Skill\PlayerSkill;
use App\Models\Player\Skill\Skill;
use Illuminate\Support\Facades\Cache;

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
        $this->skill = $this->generateAverageSkills();
    }

    public function generateAverageSkills(): PlayerSkill
    {
        $key =  implode('_', [
            $this->league->id,
            strtolower(Batter::class),
            'average',
            'skills'
        ]);

        $attributes = Cache::get($key, false);

        if ($attributes === false) {
            $attributes = $this->fetchAveragedAttributes();
        }

        Cache::set($key, $attributes, 60*60);

        return new BatterSkill($attributes);
    }

    public function fetchAveragedAttributes(): array
    {
        $columns = Skill::skillsFor(Batter::class);

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

        return $attributes;
    }

    private function checkCache()
    {

    }
}
