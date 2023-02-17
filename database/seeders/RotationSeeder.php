<?php

namespace Database\Seeders;

use App\Models\Player\Pitcher;
use App\Models\Team\Rotation;
use App\Models\Team\RotationPitcher;
use App\Models\Team\Team;
use Illuminate\Database\Seeder;

class RotationSeeder extends Seeder
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

            $rotation = new Rotation(['team_id' => $team->id]);
            $rotation->save();

            /** @var Pitcher $pitcher */
            foreach ($team->pitchers() as $pitcher) {
                RotationPitcher::insert([
                    'rotation_id' => $rotation->id,
                    'player_id' => $pitcher->id,
                    'roster_position_id' => $pitcher->rosterPosition->id
                ]);
            }
        }
    }
}
