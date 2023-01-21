<?php

namespace Database\Seeders;

use App\Models\Player\Player;
use App\Models\Team\RosterPosition;
use App\Models\Team\Team;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
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

            /** @var RosterPosition $position */
            foreach (RosterPosition::all() as $position) {

                $height = $position->position->randomPlayerHeight();
                $weight = $position->position->randomPlayerWeight($height['inches']);

                $player = Player::factory()->make([
                    'age'               => $team->league->randomPlayerAge(),
                    'position_id'       => $position->id,
                    'height'            => $height['inches'],
                    'weight'            => $weight['pounds']
                ]);
            }
        }
    }

    protected function height(int $position_id)
    {

    }
}
