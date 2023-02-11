<?php

namespace Database\Seeders;

use App\Models\League;
use App\Models\Matchup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatchupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = json_decode(file_get_contents(__DIR__ . '/src/calendar.json'));

        foreach (League::all() as $league) {
            foreach ($rows as $row) {
                Matchup::insert([
                    'league_id' => $league->id,
                    'day' => $row->day,
                    'away_id' => ($league->id - 1) + $row->away,
                    'home_id' => ($league->id - 1) + $row->home
                ]);
            }
        }
    }
}
