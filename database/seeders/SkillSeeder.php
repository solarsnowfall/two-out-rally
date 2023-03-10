<?php

namespace Database\Seeders;

use App\Models\Player\Skill\BatterSkill;
use App\Models\Player\Skill\Focus;
use App\Models\Player\Skill\PitcherSkill;
use App\Models\Player\Skill\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = '[{"is_pitcher":true,"label":"stamina","name":"Stamina","attribute":"Control","description":"Pinpoint placement of your pitches, a must for weak contact, preventing walks and lasting later into games. Strong vs Vision. Weak vs Athleticism."},{"is_pitcher":true,"label":"mechanics","name":"Mechanics","attribute":"Control","description":"The ability to make a pitch move after release, for knee-bending curveballs and terrifying sliders. Strong vs Muscle. Weak vs Vision."},{"is_pitcher":true,"label":"paint_corner","name":"Paint Corner","attribute":"Control","description":"Bringing the ball faster to the plate tests a batter\'s timing and reaction and disrupts the running game. Strong vs Athleticism. Weak vs Muscle."},{"is_pitcher":true,"label":"induce_grounder","name":"Induce Grounder","attribute":"Control","description":"Throw more pitches in an outing without losing effectiveness. Primary: Pitches per outing. Secondary: none."},{"is_pitcher":true,"label":"vertical_break","name":"Vertical Break","attribute":"Movement","description":"Consistently repeat your windup and stretch, reducing mistakes. Primary: Avoid wild pitches. Secondary: Avoid walks."},{"is_pitcher":true,"label":"release","name":"Release","attribute":"Movement","description":"Hit the corners of the strike zone, encouraging patient batters to swing and make weak contact. Primary: Avoid walks. Secondary: Avoid line drives."},{"is_pitcher":true,"label":"horizontal_break","name":"Horizontal Break","attribute":"Movement","description":"Force bigger sluggers and line drive hitters to hit weak ground balls instead. Primary: Avoid fly balls. Secondary: Avoid line drives."},{"is_pitcher":true,"label":"induce_popup","name":"Induce Popup","attribute":"Movement","description":"Get downward movement on pitches like sinkers and curveballs, drawing swings and misses and burying bad pitches in the dirt rather than the back screen. Primary: none. Secondary: Strikeouts, Avoid wild pitches."},{"is_pitcher":true,"label":"power","name":"Power","attribute":"Velocity","description":"Hide your release point, preventing a hitter from hitting an effective ground ball or taking a free pass. Primary: Avoid ground balls. Secondary: Avoid walks."},{"is_pitcher":true,"label":"delivery","name":"Delivery","attribute":"Velocity","description":"Get sideways movement on pitches like sliders and curves, preventing solid contact. Primary: Avoid line drives. Secondary: none."},{"is_pitcher":true,"label":"explosiveness","name":"Explosiveness","attribute":"Velocity","description":"Fool the batter into a power swing that induces a weak fly ball instead. Primary: Popups. Secondary: Weakens fly balls."},{"is_pitcher":true,"label":"pickoff","name":"Pickoff","attribute":"Velocity","description":"Throw pitches faster, throwing off the batter\'s timing and inducing strikeouts. Primary: Strikeouts. Secondary: none."},{"is_pitcher":false,"label":"line_drive","name":"Line Drive","attribute":"Vision","description":"Keen eyesight and hand eye coordination for strong fundamental hitting. Strong vs Movement. Weak vs Control."},{"is_pitcher":false,"label":"reaction","name":"Reaction","attribute":"Vision","description":"Pure physical strength for home run power and rocket throwing arms. Strong vs Velocity. Weak vs Movement."},{"is_pitcher":false,"label":"discipline","name":"Discipline","attribute":"Vision","description":"Nimble, quick movement for highlight reel defense and base running. Strong vs Control. Weak vs Velocity."},{"is_pitcher":false,"label":"bat_control","name":"Bat Control","attribute":"Vision","description":"Hit frozen ropes that have the best chance of falling in for a base hit. Primary: Hit line drives. Secondary: none."},{"is_pitcher":false,"label":"fly_ball","name":"Fly Ball","attribute":"Muscle","description":"Improve hand-eye coordination to adjust quickly to balls in the field or out of a pitcher\'s hand. Primary: Avoid catching errors. Secondary: Hit Fly balls, Plate blocking, Avoid strikeouts."},{"is_pitcher":false,"label":"lower_body","name":"Lower Body","attribute":"Muscle","description":"Improve patience at the plate and on the base paths, drawing walks, increasing pitch counts, and picking better stealing opportunities. Primary: Walk. Secondary: Base running."},{"is_pitcher":false,"label":"pull","name":"Pull","attribute":"Muscle","description":"Fight off tough pitches to avoid strikeouts, and make solid contact to all fields. Primary: Avoid strikeouts. Secondary: Line drive power."},{"is_pitcher":false,"label":"arm_strength","name":"Arm Strength","attribute":"Muscle","description":"Hit the ball in the air for extra bases, including home runs. Primary: Hit fly balls. Secondary: Fly ball power."},{"is_pitcher":false,"label":"speed","name":"Speed","attribute":"Athleticism","description":"Increase lower body strength for a better stance: both behind the plate as a catcher and in the batter\'s box. Primary: Plate blocking. Secondary: Avoid catching errors, Walk."},{"is_pitcher":false,"label":"grace","name":"Grace","attribute":"Athleticism","description":"Hit the ball more powerfully, and use the strong side of the field more. Primary: Fly ball power. Secondary: Hit line drives."},{"is_pitcher":false,"label":"ground_ball","name":"Ground Ball","attribute":"Athleticism","description":"Build muscle in the arms, wrist, and torso, for powerful throwing arms and hitting balls higher in the strike zone. Primary: Throwing strength, Line drive power. Secondary: none."},{"is_pitcher":false,"label":"accuracy","name":"Accuracy","attribute":"Athleticism","description":"Become faster in the field and on the bases, and leg out more ground ball base hits. Primary: Base running. Secondary: Hit ground balls, Defensive range."}]';

        $rows = json_decode($json, true);

        foreach ($rows as $row) {
            $focus = Focus::whereName($row['attribute'])->first();
            $row['focus_id'] = $focus->id;
            $row['type'] = $row['is_pitcher'] ? PitcherSkill::class : BatterSkill::class;
            $row['attribute'] = $row['label'];
            unset($row['is_pitcher'], $row['label']);
            Skill::insert($row);
        }
    }
}
