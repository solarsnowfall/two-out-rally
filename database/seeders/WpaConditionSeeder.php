<?php

namespace Database\Seeders;

use App\Models\WpaCondition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WpaConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/src/wpa.json'), true);
        $rows = [];

        foreach ($data as $row) {
            $rows[] = [
                'batting' => $row['batting'],
                'inning' => $row['inning'],
                'outs' => $row['outs'],
                'first' => $row['1b'],
                'second' => $row['2b'],
                'third' => $row['3b'],
                'down_by_five' => $row['d5'],
                'down_by_four' => $row['d4'],
                'down_by_three' => $row['d3'],
                'down_by_two' => $row['d2'],
                'down_by_one' => $row['d1'],
                'tied' => $row['tied'],
                'up_by_one' => $row['u1'],
                'up_by_two' => $row['u2'],
                'up_by_three' => $row['u3'],
                'up_by_four' => $row['u4'],
                'up_by_five' => $row['u5']
            ];
        }

        WpaCondition::insert($rows);
    }
}
