<?php

namespace Database\Seeders;

use App\Models\Data\City;
use App\Models\Data\TeamName;
use App\Models\League;
use App\Models\Team\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub_divisions = ['West', 'Central', 'East'];
        foreach (League::all() as $league) {
            for ($i=0; $i<30; $i++) {
                $city = City::inRandomOrder()->first();
                $division = $i < 15 ? 'Red' : 'Blue';
                $sub_division = $sub_divisions[floor(($i % 15) / 5)];
                Team::insert([
                    'league_id'     => $league->id,
                    'division'      => $division,
                    'sub_division'  => $sub_division,
                    'name'          => TeamName::randomName(),
                    'city'          => $city->name,
                    'state'         => $city->state
                ]);
            }
        }
    }
}
