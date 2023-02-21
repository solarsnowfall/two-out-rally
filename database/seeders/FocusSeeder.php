<?php

namespace Database\Seeders;

use App\Models\Player\Skill\BatterFocus;
use App\Models\Player\Skill\Focus;
use App\Models\Player\Skill\PitcherFocus;
use Illuminate\Database\Seeder;

class FocusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'type' => BatterFocus::class,
            'name' => 'Vision',
            'abbrv' => 'VIS',
            'description' => 'Keen eye sight and hand eye coordination for strong fundamental hitting.'
        ], [
            'type' => BatterFocus::class,
            'name' => 'Muscle',
            'abbrv' => 'MUS',
            'description' => 'Pure physical strength for home run power and rocket throwing arms.'
        ], [
            'type' => BatterFocus::class,
            'name' => 'Athleticism',
            'abbrv' => 'ATH',
            'description' => 'Nimble, quick movement for highlight reel defense and base running.'
        ], [
            'type' => PitcherFocus::class,
            'name' => 'Control',
            'abbrv' => 'CON',
            'description' => 'Pinpoint placement of your pitches, a must for weak contact, preventing walks and lasting later into games.'
        ], [
            'type' => PitcherFocus::class,
            'name' => 'Movement',
            'abbrv' => 'MOV',
            'description' => 'The ability to make a pitch move after release, for knee-bending curveballs and terrifying sliders.'
        ], [
            'type' => PitcherFocus::class,
            'name' => 'Velocity',
            'abbrv' => 'VEL',
            'description' => 'Throw more pitches in an outing without losing effectiveness.'
        ], [
            'type' => null,
            'name' => 'Balanced',
            'abbrv' => 'BAL',
            'description' => 'Well-rounded with no obvious strengths or weaknesses.'
        ]];

        Focus::insert($data);

        $data = [
            Focus::VISION => ['strong_against' => Focus::MOVEMENT, 'weak_against' => Focus::CONTROL],
            Focus::MUSCLE => ['strong_against' => Focus::VELOCITY, 'weak_against' => Focus::MOVEMENT],
            Focus::ATHLETICISM => ['strong_against' => Focus::CONTROL, 'weak_against' => Focus::VELOCITY],
            Focus::CONTROL => ['strong_against' => Focus::VISION, 'weak_against' => Focus::ATHLETICISM],
            Focus::MOVEMENT => ['strong_against' => Focus::MUSCLE, 'weak_against' => Focus::VISION],
            Focus::VELOCITY => ['strong_against' => Focus::ATHLETICISM, 'weak_against' => Focus::MUSCLE]
        ];

        foreach ($data as $id => $row) {
            $focus = Focus::find($id);
            $focus->strong_against = $row['strong_against'];
            $focus->weak_against = $row['weak_against'];
            $focus->save();
        }
    }
}
