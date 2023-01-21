<?php

namespace Database\Seeders;

use App\Models\Player\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = [
            [
                'abbrv'         => 'P',
                'name'          => 'Pitcher',
                'size_offsets'  => json_encode([
                    -1,0,0,0,0,1,1,1,1,2
                ])
            ],
            [
                'abbrv'         => 'C',
                'name'          => 'Catcher',
                'size_offsets'  => json_encode([
                    -1,0,0,0,0,1,1,1,1,2
                ])
            ],
            [
                'abbrv'         => '1B',
                'name'          => 'First Baseman',
                'size_offsets'  => json_encode([
                    -1,0,0,0,1,1,1,1,1,2
                ])
            ],
            [
                'abbrv'         => '2B',
                'name'          => 'Second Baseman',
                'size_offsets'  => json_encode([
                    -1,0,0,0,0,1,1,1,1,1
                ])
            ],
            [
                'abbrv'         => '3B',
                'name'          => 'Third Baseman',
                'size_offsets'  => json_encode([
                    -1,0,0,0,1,1,1,1,1,2
                ])
            ],
            [
                'abbrv'         => 'SS',
                'name'          => 'Shortstop',
                'size_offsets'  => json_encode([
                    -1,-1,0,0,0,0,0,0,1,1
                ])
            ],
            [
                'abbrv'         => 'LF',
                'name'          => 'Left Fielder',
                'size_offsets'  => json_encode([
                    -1,0,0,0,1,1,1,1,1,2
                ])
            ],
            [
                'abbrv'         => 'CF',
                'name'          => 'Center Fielder',
                'size_offsets'  => json_encode([
                    -1,0,0,0,0,1,1,1,1,1
                ])
            ],
            [
                'abbrv'         => 'RF',
                'name'          => 'Right Fielder',
                'size_offsets'  => json_encode([
                    -1,0,0,0,1,1,1,1,1,2
                ])
            ]
        ];

        foreach ($rows as $row) {
            Position::insert($row);
        }
    }
}
