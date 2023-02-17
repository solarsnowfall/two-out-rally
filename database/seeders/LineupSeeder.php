<?php

namespace Database\Seeders;

use App\Models\League;
use App\Models\Player\Batter;
use App\Models\Team\Lineup;
use App\Models\Team\LineupBatter;
use App\Models\Team\Team;
use App\Modules\LineupGenerator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LineupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var League $league */
        foreach (League::all() as $league) {
            /** @var Team $team */
            foreach ($league->teams as $team) {
                $generator = new LineupGenerator($team);
                /** @var Batter[] $lineup */
                $lineup = $generator->generate();
                $id = Lineup::insert(['team_id' => $team->id]);
                foreach ($lineup as $k => $batter) {
                    LineupBatter::insert([
                        'lineup_id' => $id,
                        'player_id' => $batter->id,
                        'roster_position_id' => $batter->rosterPosition->id,
                        'batting_order' => $k + 1
                    ]);
                }
            }
        }
    }
}
