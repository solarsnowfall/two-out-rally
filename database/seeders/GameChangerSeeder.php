<?php

namespace Database\Seeders;

use App\Models\GameChanger\BatterGameChanger;
use App\Models\GameChanger\BatterSkill;
use App\Models\GameChanger\GameChanger;
use App\Models\GameChanger\PitcherGameChanger;
use App\Models\GameChanger\PitcherSkill;
use App\Models\GameChanger\TeamGameChanger;
use App\Models\Player\Batter;
use App\Models\Player\PlayerBackground;
use App\Models\Player\PlayerPersonality;
use App\Models\Player\Skill\Focus;
use App\Models\Player\Skill\Skill;
use App\Models\Team\RosterPosition;
use App\Sim\Game;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GameChangerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = json_decode(file_get_contents(__DIR__ . '/src/tor_gamechangers.json'), true);

        foreach ($rows as $row) {
            $gamechanger = new GameChanger();
            $gamechanger->name = $row['name'];
            $gamechanger->rarity = $row['rarity'];
            $gamechanger->description = $row['gc_desc'];
            $gamechanger->type = $this->getClass($row['name'], $row['type']);
            $gamechanger->category = $this->getCategory($row['type']);
            $gamechanger->bonus_type = $this->getBonusType($row['bonus_type']);
            $gamechanger->image = $row['image'];
            $gamechanger->roster_position_id = $this->getRosterPositionId($row['position']);
            $gamechanger->focus_id = $this->getFocusId($row['focus']);
            $gamechanger->player_personality_id = $this->getPlayerPersonalityId($row['personality']);
            $gamechanger->player_background_id = $this->getPlayerBackgroundId($row['background']);
            $gamechanger->celebrity = $row['celebrity'];
            $gamechanger->rep = $row['rep'];
            $gamechanger->fitness = $row['fitness'];
            $gamechanger->moxie = $row['moxie'];

            $gamechanger->save();
            $this->createBatterSkills($gamechanger, $row);
            $this->createPitcherSkills($gamechanger, $row);
        }
    }

    private function getCategory(string $type)
    {
        return match($type) {
            'ha' => 'hitter_approach',
            'pa' => 'pitcher_approach',
            'ta' => 'team_approach'
        };
    }

    private function getClass(string $name, string $type)
    {
        $namespace = 'App\\Models\\GameChanger\\' . match($type) {
            'ha' => 'Batter',
            'pa' => 'Pitcher',
            'ta' => 'Team'
        };

        $name = strtolower(str_replace(' ', '_', $name));

        if ($name === '12-6_curveball') {
            $name = 'twelve_six_curveball';
        }

        return "$namespace\\" . Str::studly($name);
    }

    private function getBonusType(string $bonus_type)
    {
        $types = explode(', ', $bonus_type);

        foreach ($types as $key => $val) {
            if (str_contains($val, 'flyball')) {
                $types[$key] = str_replace('flyball', 'fly_ball', $val);
            }
        }

        return implode(',', $types);
    }

    private function getRosterPositionId(string $position)
    {
        if (empty($position)) {
            return null;
        }

        return RosterPosition::whereAbbrv(strtoupper($position))->first()->id;
    }

    private function getFocusId(string $focus)
    {
        if (empty($focus)) {
            return null;
        }

        $focus = explode(', ', $focus);
        $ids = [];

        foreach ($focus as $name) {
            $ids[] = Focus::whereName(ucfirst($name))->first()->id;
        }

        return implode(',', $ids);
    }

    private function getPlayerPersonalityId(string $personality)
    {
        $personality = trim($personality);

        if (empty($personality)) {
            return null;
        }

        return PlayerPersonality::whereName($personality)->first()->id;
    }

    private function getPlayerBackgroundId(string $background)
    {
        $background = trim($background);

        if (empty($background)) {
            return null;
        }

        return PlayerBackground::whereName($background)->first()->id;
    }

    private function createSkills(GameChanger $gamechanger, array $row)
    {


    }

    private function createBatterSkills(GameChanger $gamechanger, array $row)
    {
        $alias = [
            'bat_control' => 'batter_batcontrol',
            'line_drive' => 'batter_linedrive',
            'fly_ball' => 'batter_flyball',
            'lower_body' => 'batter_lowerbody',
            'arm_strength' => 'batter_armstrength',
            'ground_ball' => 'batter_groundball'
        ];

        $data = ['game_changer_id' => $gamechanger->id];

        foreach (\App\Models\Player\Skill\BatterSkill::skillAttributes() as $attribute) {

            if (array_key_exists($attribute, $alias)) {
                $name = $alias[$attribute];
            } else {
                $name = 'batter_' . $attribute;
            }

            if (!array_key_exists($name, $row)) {
                throw new \Exception("Skill not found $name");
            }

            $data[$attribute] = $row[$name];
        }

        BatterSkill::insert($data);
    }

    private function createPitcherSkills(GameChanger $gamechanger, array $row)
    {
        $alias = [
            'paint_corner' => 'pitcher_paintcorner',
            'induce_grounder' => 'pitcher_inducegrounder',
            'vertical_break' => 'pitcher_verticalbreak',
            'horizontal_break' => 'pitcher_horizontalbreak',
            'induce_popup' => 'pitcher_inducepopup',
            'pick_off' => 'pitcher_pickoff'
        ];

        $data = ['game_changer_id' => $gamechanger->id];

        foreach (\App\Models\Player\Skill\PitcherSkill::skillAttributes() as $attribute) {

            if (array_key_exists($attribute, $alias)) {
                $name = $alias[$attribute];
            } else {
                $name = 'pitcher_' . $attribute;
            }

            if (!array_key_exists($name, $row)) {
                throw new \Exception("Skill not found $name");
            }

            $data[$attribute] = $row[$name];
        }

        PitcherSkill::insert($data);
    }
}
