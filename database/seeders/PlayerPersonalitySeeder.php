<?php

namespace Database\Seeders;

use App\Models\Player\PlayerPersonality;
use Illuminate\Database\Seeder;

class PlayerPersonalitySeeder extends Seeder
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
                'name' => 'The Dude',
                'description' => "Laid back and likable, perhaps to a fault, the Dude is passive and tends not to get overly excited about anything. The fans like him, his teammates like him, and he's a very calming influence, but don't count on him being a team leader or bearing down in a big spot.  Celebrity: +10% Charity: +10%",
                'chemistry' => 30,
                'charisma' => 20
            ], [
                'name' => 'The Showboat',
                'description' => "The Showboat is a great player, and wants everyone to know about it. He dazzles with the theatrical, he plays to the crowd and is a huge fan favorite. He's also sort of a drama queen, and tends to pout when things don't go his way. His teammates tend to be put off by his \"me first\" attitude, and they won't follow his lead, but he does tend to come up big in the biggest moments. After all, that's when everyone's watching.  Celebrity: +20%",
                'charisma' => 30,
                'competitiveness' => 20
            ], [
                'name' => 'The Hothead',
                'description' => "Only a certain type of fan could love this guy, and there aren't many of them. Abrasive and temperamental, he's also wildly competitive and refuses to be beaten in any situation, regardless of how dire. He'll also whip his team into shape, even if it's begrudgingly. Don't expect any charity work or too many endorsements (he hates being on camera), but he's being paid to win, and he won't let you forget it.  Fitness: +20%",
                'competitiveness' => 30,
                'leadership' => 20
            ], [
                'name' => 'The Captain',
                'description' => "The Captain is a sort of dry, neutral character that doesn't really inspire strong feelings one way or another. He cares about his teammates first and foremost and gives lousy, dull interviews that would never betray his organization or his dugout peers. But his team trusts him wholeheartedly, and would follow his lead - just never in a very impassioned sort of way.  Charity: +20%",
                'chemistry' => 20,
                'leadership' => 30
            ], [
                'name' => 'The Professional',
                'description' => "The Professional goes to work each and every day. He realizes that he's in the entertainment business, and will give some of that side his attention as necessary. He also realizes that he should connect with teammates, and lead by example when the time comes. He can smile for the camera and sign some autographs. Adding a Professional may not help a team much, but it will never, ever hurt.  Celebrity: +10% Charity: +10% Fitness: +10%",
                'chemistry' => 10,
                'charisma' => 10,
                'competitiveness' => 10,
                'leadership' => 10
            ], [
                'name' => 'The Surly',
                'description' => "Oooh, boy! While not as bad as he sounds, The Surly player has a live and let live policy. He will do his job, and he would prefer not to be bothered about it. He's also hyper competitive (he always has something to prove, and improves his game with anger), but unlike the Hothead will not fire up his squad. However, he does tend to be a popular figure (if not a loved one) as his interviews are frank and great entertainment.  Celebrity: +10% Fitness: +10%",
                'charisma' => 20,
                'competitiveness' => 30
            ], [
                'name' => 'The Whiz Kid',
                'description' => "Perhaps the newest archetype of player since the statistical revolution, the Whiz Kid is sharp and uses an advanced understanding of the information available to make him and his teammates better. He's kind and articulate and his teammates will follow his lead and enjoy his company, however he lacks competitive fire and his nerdy charm doesn't play on TV well.  Charity: +10% Fitness: +10%",
                'chemistry' => 30,
                'leadership' => 20
            ]
        ];

        foreach ($rows as $row) {
            PlayerPersonality::insert($row);
        }
    }
}
