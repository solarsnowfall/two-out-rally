<?php

namespace Database\Seeders;

use App\Models\Player\Pitcher;
use App\Models\Team\Bullpen;
use App\Models\Team\BullpenPitcher;
use App\Models\Team\Team;
use Illuminate\Database\Seeder;

class BullpenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var Team $team */
        foreach (Team::all() as $team) {

            $bullpen = new Bullpen(['team_id' => $team->id]);
            $bullpen->save();

            /** @var Pitcher $pitcher */
            foreach ($team->pitchers() as $pitcher) {
                BullpenPitcher::insert([
                    'bullpen_id' => $bullpen->id,
                    'player_id' => $pitcher->id,
                    'roster_position_id' => $pitcher->rosterPosition->id
                ]);
            }
        }
    }
}
