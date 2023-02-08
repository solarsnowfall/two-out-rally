<?php

namespace Database\Seeders;

use App\Models\Data\PlayerLastName;
use Illuminate\Database\Seeder;

class PlayerLastNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(__DIR__ . '/src/player_last_names.json');
        $rows = json_decode($json, true);

        foreach (array_chunk($rows, 1000, true) as $rowSet) {
            PlayerLastName::insert($rowSet);
        }
    }
}
