<?php

namespace Database\Seeders;

use App\Models\Player\Batter;
use App\Models\Player\Player;
use App\Models\Player\PlayerBackground;
use App\Models\Player\PlayerPersonality;
use App\Models\Player\Position;
use App\Models\Player\Skill\BatterSkill;
use App\Models\Player\Skill\PitcherSkill;
use App\Models\Player\Skill\PlayerEffort;
use Illuminate\Database\Seeder;

class PlayerSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $offset = 0;

        while ($players = Player::limit(100)->offset($offset)->get()) {

            if (!$players->count()) {
                break;
            }

            $batters = $pitchers = [];

            foreach ($players as $player) {
                if ($player instanceof Batter) {
                    $batters[$player->id] = $this->focusPoints($player);
                } else {
                    $pitchers[$player->id] = $this->focusPoints($player);
                }
            }

            if (count($pitchers)) {
                $this->createPitcherSkills($pitchers);
            }

            if (count($batters)) {
                $this->createBatterSkills($batters);
            }

            $offset += 100;
        }
    }

    protected function createPitcherSkills(array $points) {
        $list = [[
            'stamina',
            'mechanics',
            'paint_corner',
            'induce_grounder'
        ], [
            'vertical_break',
            'release',
            'horizontal_break',
            'induce_popup',
        ], [
            'power',
            'delivery',
            'explosiveness',
            'pickoff'
        ]];

        $skills = [];

        foreach ($points as $player_id => $focus) {
            $skills[$player_id] = [
                'player_id' => $player_id,
                'player_effort_id' => PlayerEffort::PITCHING_NORMAL
            ];
            foreach ($list as $group) {
                foreach ($group as $attr) {
                    $skills[$player_id][$attr] = 0;
                }
            }
            foreach ($focus as $k => $v) {
                for ($i=0; $i<$v; $i++) {
                    $attr = $list[$k][mt_rand(0, count($list[$k]) -1)];
                    $skills[$player_id][$attr]++;
                }
            }
        }

        PitcherSkill::insert($skills);
    }

    protected function createBatterSkills(array $points) {
        $list = [[
            'line_drive',
            'reaction',
            'discipline',
            'bat_control'
        ], [
            'fly_ball',
            'lower_body',
            'pull',
            'arm_strength'
        ], [
            'speed',
            'grace',
            'ground_ball',
            'accuracy'
        ]];

        $skills = [];

        foreach ($points as $player_id => $focus) {
            $skills[$player_id] = [
                'player_id' => $player_id,
                'player_effort_id' => PlayerEffort::STEALING_CONSERVATIVE
            ];
            foreach ($list as $group) {
                foreach ($group as $attr) {
                    $skills[$player_id][$attr] = 0;
                }
            }
            foreach ($focus as $k => $v) {
                for ($i=0; $i<$v; $i++) {
                    $attr = $list[$k][mt_rand(0, count($list[$k]) -1)];
                    if (!isset($skills[$player_id][$attr])) {
                        $skills[$player_id][$attr] = 0;
                    }
                    $skills[$player_id][$attr]++;
                }
            }
        }

        BatterSkill::insert($skills);
    }

    protected function focusPoints(Player $player)
    {
        $focus = [0, 0, 0];

        foreach ([
            $this->getBackgroundFocusPoints($player),
            $this->getPersonalityBonus($player),
            $this->getPositionFocusPoints($player),
            $this->getHeightFocusPoints($player),
            $this->getWeightFocusPoints($player)
        ] as $fp) {
            foreach ($fp as $k => $v) {
                $focus[$k] += $v;
            }
        };

        for ($i=0; $i<$player->level*5; $i++) {
            $focus[mt_rand(0, 2)]++;
        }

        return $focus;
    }

    private function getBackgroundFocusPoints(Player $player): array
    {
        if ($player->position_id === Position::PITCHER) {
            return match($player->background_id) {
                PlayerBackground::QUARTERBACK => [3, 0, 0],
                PlayerBackground::PREP_SCHOOL => [2, 0, 1],
                PlayerBackground::JAPANESE_HIGH_SCHOOL => [2, 1, 0],
                PlayerBackground::STREET_PLAYER, PlayerBackground::TRACK_AND_FIELD => [1, 2, 0],
                PlayerBackground::LATIN_ACADEMY_GRAD => [1, 1, 1]
            };
        }

        return match($player->background_id) {
            PlayerBackground::QUARTERBACK => [3, 0, 0],
            PlayerBackground::PREP_SCHOOL => [2, 1, 0],
            PlayerBackground::JAPANESE_HIGH_SCHOOL => [2, 0, 1],
            PlayerBackground::STREET_PLAYER => [1, 2, 0],
            PlayerBackground::TRACK_AND_FIELD => [1, 0, 2],
            PlayerBackground::LATIN_ACADEMY_GRAD => [1, 1, 1]
        };
    }

    private function getPersonalityBonus(Player $player): array
    {
        if ($player->position_id === Position::PITCHER) {
            return match($player->background_id) {
                PlayerPersonality::THE_DUDE => [3, 0, 0],
                PlayerPersonality::THE_SHOWBOAT => [0, 3, 0],
                PlayerPersonality::THE_HOTHEAD => [0, 1, 2],
                PlayerPersonality::THE_CAPTAIN => [1, 1, 1],
                PlayerPersonality::THE_PROFESSIONAL => [1, 0, 2],
                PlayerPersonality::THE_SURLY => [0, 2, 1],
                PlayerPersonality::THE_WHIZ_KID => [2, 0, 1]
            };
        }

        return match($player->background_id) {
            PlayerPersonality::THE_DUDE => [3, 0, 0],
            PlayerPersonality::THE_SHOWBOAT => [0, 0, 3],
            PlayerPersonality::THE_HOTHEAD => [0, 2, 1],
            PlayerPersonality::THE_CAPTAIN => [1, 1, 1],
            PlayerPersonality::THE_PROFESSIONAL => [1, 2, 0],
            PlayerPersonality::THE_SURLY => [0, 1, 2],
            PlayerPersonality::THE_WHIZ_KID => [2, 1, 0]
        };
    }

    private function getPositionFocusPoints(Player $player): array
    {
        return match($player->position_id) {
            Position::PITCHER, Position::THIRD_BASEMAN => [1, 1, 1],
            Position::CATCHER, Position::RIGHT_FIELDER => [3, 0, 0],
            Position::FIRST_BASEMAN => [1, 2, 0],
            Position::SECOND_BASEMAN => [2, 0, 1],
            Position::SHORTSTOP => [1, 0, 2],
            Position::LEFT_FIELDER => [0, 2, 1],
            Position::CENTER_FIELDER => [0, 1, 2]
        };
    }

    private function getHeightFocusPoints(Player $player): array
    {
        return match($player->height_class + 1) {
            0 => [3, 0, 0],
            1 => [1, 1, 1],
            2 => [0, 2, 1],
            3 => [0, 3, 0]
        };
    }

    private function getWeightFocusPoints(Player $player): array
    {
        return match($player->weight_class + 1) {
            0 => [0, 0, 3],
            1 => [0, 1, 2],
            2 => [0, 2, 1],
            3 => [0, 3, 0]
        };
    }
}
