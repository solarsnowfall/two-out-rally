<?php

namespace Database\Seeders;

use App\Models\Stat;
use App\Models\Stats\DefensiveStat;
use App\Models\Stats\OffensiveStat;
use App\Models\Stats\PitchingStat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(__DIR__ . '/src/stats.json');
        $rows = json_decode($json, true);

        foreach ($rows as $row) {
            $row['visible'] = $this->getVisibility($row['abbrv']);
            $row['type'] = $this->getType($row['abbrv']);
            Stat::create($row);
        }
    }

    public function getType(string $abbrv)
    {
        return match($abbrv) {
            'A','$$$','DP','ERR','FLD%','PB','PO','P/PA','RF/G','UZR','VOC' => DefensiveStat::class,
            'AB','ERA+','OPS+','BA','BABIP','CS','2B','EqA','FB%','GB%','GDP','H','HBP','HR','ISO','LgOBP','LgSLG','LD%',
            'OBP','OUTS','PA','POP%','R','RAR','RBI','RC','RC/G','SH','1B','SLG','RARR','RARS','SB','3B','BB' => OffensiveStat::class,
            default => PitchingStat::class
        };
    }

    public function getVisibility(string $abbrv): int
    {
        return match($abbrv) {
            '$$$','VOC' => 0,
            default => 1
        };
    }
}
