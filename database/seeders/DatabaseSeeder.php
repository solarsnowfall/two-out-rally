<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Player\Skill\PlayerEffort;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            PositionSeeder::class,
            RosterPositionSeeder::class,
            PlayerBackgroundSeeder::class,
            PlayerPersonalitySeeder::class,
            FocusSeeder::class,
            SkillSeeder::class,
            GameChangerSeeder::class,
            CitySeeder::class,
            TeamNameSeeder::class,
            PlayerFirstNameSeeder::class,
            PlayerLastNameSeeder::class,
            LeagueSeeder::class,
            TeamSeeder::class,
            SeasonSeeder::class,
            PlayerSeeder::class,
            PlayerEffortSeeder::class,
            PlayerSkillSeeder::class,
            StatSeeder::class,
            MatchupSeeder::class,
            LineupSeeder::class,
            BullpenSeeder::class,
        ]);
    }
}
