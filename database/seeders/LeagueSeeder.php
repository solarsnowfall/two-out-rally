<?php

namespace Database\Seeders;

use App\Models\League;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Casual' => [
                'CPU' => [1],
                'Human' => [1, 2, 3, 4]
            ],
            'Open' => [
                'CPU' => [1],
                'Human' => [1, 2, 3, 4]
            ],
            'WBL' => [
                'Human' => [4]
            ]
        ];

        foreach ($data as $type => $controlLevels) {
            foreach ($controlLevels as $control => $levels) {
                foreach ($levels as $level) {
                    League::insert([
                        'type'          => $type,
                        'controlled'    => $control,
                        'level'         => $level
                    ]);
                }
            }
        }
    }
}
