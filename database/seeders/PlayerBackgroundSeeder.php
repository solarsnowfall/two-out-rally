<?php

namespace Database\Seeders;

use App\Models\Player\PlayerBackground;
use Illuminate\Database\Seeder;

class PlayerBackgroundSeeder extends Seeder
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
                'name' => 'Quarterback',
                'description' => "The All American athlete, this player didn't put as much dedicated time into baseball as some other candidates, but the year round work outs and leadership under pressure will certainly go a long way. There's a long history of former QB's making a big splash in baseball, and his universal appeal makes him easy to get along with.  Likes: Charity."
            ], [
                'name' => 'Prep School',
                'description' => "A spoiled rich kid, sure. But this player had access to the best indoor training facilities, equipment, and instructors available, and has a polished professional game right out of the gate. His sheltered background and sort of prissy demeanor can be off-putting to those of different upbringings.  Likes: Charity.",
            ], [
                'name' => 'Japanese High School',
                'description' => "This player is a graduate of one of the elite, hyper competitive Japanese league competitive teams. Already used to intense scrutiny and pressure, and a grueling workout schedule, this player's nerves are already hardened. An emphasis on playing the game a certain way to the detriment of skills valued in the American game could be an impediment.  Likes: Fitness."
            ], [
                'name' => 'Street Player',
                'description' => "A rough, unrefined game defines the Street Player. Coming from loosely organized leagues, usually in bigger cities in America, the Street Player is self taught and extremely motivated. Rather than having specialized training, he played a variety of different sports and brings elements of all of them to the table.  Likes: Celebrity.",
            ], [
                'name' => 'Track and Field',
                'description' => "Running and throwing, just taken into a different context, works as well, and so it is with the Track and Field star. His intense athleticism needs some fine tuning with some baseball instincts, but with good instruction and motivation he often turns into a game changing player.  Likes: Fitness."
            ], [
                'name' => 'Latin Academy Grad',
                'description' => "A graduate of one of the highly specialized high schools intended only for the creation of baseball players, this player has lived and breathed baseball most of his life. His instincts are honed to perfection, and his game is potentially unlimited.  Likes: Celebrity."
            ]
        ];

        foreach ($rows as $row) {
            PlayerBackground::insert($row);
        }
    }
}
