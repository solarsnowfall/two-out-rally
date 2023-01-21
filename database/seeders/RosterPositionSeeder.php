<?php

namespace Database\Seeders;

use App\Models\Player\Position;
use App\Models\Team\RosterPosition;
use Illuminate\Database\Seeder;

class RosterPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = [
            ['position_id' => Position::P, 'abbrv' => 'SP1', 'name' => 'Starting Pitcher'],
            ['position_id' => Position::P, 'abbrv' => 'SP2', 'name' => 'Starting Pitcher'],
            ['position_id' => Position::P, 'abbrv' => 'SP3', 'name' => 'Starting Pitcher'],
            ['position_id' => Position::P, 'abbrv' => 'SP4', 'name' => 'Starting Pitcher'],
            ['position_id' => Position::P, 'abbrv' => 'SP5', 'name' => 'Starting Pitcher'],
            ['position_id' => Position::P, 'abbrv' => 'LR', 'name' => 'Long Relief Pitcher'],
            ['position_id' => Position::P, 'abbrv' => 'MR1', 'name' => 'Middle Relief Pitcher'],
            ['position_id' => Position::P, 'abbrv' => 'MR2', 'name' => 'Middle Relief Pitcher'],
            ['position_id' => Position::P, 'abbrv' => 'MR3', 'name' => 'Middle Relief Pitcher'],
            ['position_id' => Position::P, 'abbrv' => 'MR4', 'name' => 'Middle Relief Pitcher'],
            ['position_id' => Position::P, 'abbrv' => 'SU1', 'name' => 'Setup Pitcher'],
            ['position_id' => Position::P, 'abbrv' => 'SU2', 'name' => 'Setup Pitcher'],
            ['position_id' => Position::P, 'abbrv' => 'CP', 'name' => 'Closing Pitcher'],
            ['position_id' => Position::C, 'abbrv' => 'C1', 'name' => 'Starting Catcher'],
            ['position_id' => Position::FB, 'abbrv' => 'FB', 'name' => 'Starting First Baseman'],
            ['position_id' => Position::SB, 'abbrv' => 'SB', 'name' => 'Starting Second Baseman'],
            ['position_id' => Position::TB, 'abbrv' => 'TB', 'name' => 'Starting Third Baseman'],
            ['position_id' => Position::SS, 'abbrv' => 'SS', 'name' => 'Starting Shortstop'],
            ['position_id' => Position::LF, 'abbrv' => 'LF', 'name' => 'Starting Left Fielder'],
            ['position_id' => Position::CF, 'abbrv' => 'CF', 'name' => 'Starting Center Fielder'],
            ['position_id' => Position::RF, 'abbrv' => 'RF', 'name' => 'Starting Right Fielder'],
            ['position_id' => Position::C, 'abbrv' => 'C2', 'name' => 'Backup Position Player'],
            ['position_id' => null, 'abbrv' => 'DH', 'name' => 'Designated Hitter'],
            ['position_id' => null, 'abbrv' => 'IF1', 'name' => 'Backup Position Player'],
            ['position_id' => null, 'abbrv' => 'OF', 'name' => 'Backup Position Player'],
            ['position_id' => null, 'abbrv' => 'IF2', 'name' => 'Backup Position Player'],
        ];

        foreach ($rows as $row) {
            RosterPosition::insert($row);
        }
    }
}
