<?php

namespace Database\Seeders;

use App\Models\Player\Skill\BatterSkill;
use App\Models\Player\Skill\PitcherSkill;
use App\Models\Player\Skill\PitchingEffort;
use App\Models\Player\Skill\PlayerEffort;
use App\Models\Player\Skill\StealingEffort;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PlayerEffortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stealText = array(
            'never' 		=> "Don't risk it! Never attempt a steal under any circumstance.",
            'conservative'	=> "Use your better judgement and steal only when it makes sense.",
            'moderate'		=> "Steal with greater frequency, but don't go overboard.",
            'aggressive'	=> "Steal frequently, but not under all circumstances.",
            'always'		=> "If the base in front of you is open, go for the steal."
        );

        foreach ($stealText as $level => $description) {
            PlayerEffort::insert([
                'level' => $level,
                'type' => StealingEffort::class,
                'name' => ucwords(str_replace('_', ' ', $level)),
                'description' => $description
            ]);
        }

        $effortText = array(
            'very_light'	=> "Save your arm and get the most pitches you can for your outing.",
            'light'			=> "Hold back a bit for the later innings.",
            'normal'		=> "Throw as your natural ability dictates.",
            'strong'		=> "Throw harder and faster at the cost of overall pitch count.",
            'very_strong'	=> "Put the heat on it, don't worry about stamina."
        );

        foreach ($effortText as $level => $description) {
            PlayerEffort::insert([
                'level' => $level,
                'type' => PitchingEffort::class,
                'name' => ucwords(str_replace('_', ' ', $level)),
                'description' => $description
            ]);
        }
    }
}
