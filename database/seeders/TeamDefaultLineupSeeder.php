<?php

namespace Database\Seeders;

use App\Models\Team\Team;
use App\Modules\LineupGenerator;
use Illuminate\Database\Seeder;

class TeamDefaultLineupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Team::all() as $team) {
            $lineup = new LineupGenerator($team);
            $team->default_lineup = json_encode($lineup->generate());
            $team->save();
        }
    }
}
