<?php

namespace Database\Seeders;

use App\Models\League;
use App\Models\Player\Batter;
use App\Models\Player\BatterSkill;
use App\Models\Player\Pitcher;
use App\Models\Player\PitcherSkill;
use App\Models\Player\Player;
use App\Models\Player\PlayerBackground;
use App\Models\Player\PlayerPersonality;
use App\Models\Player\Position;
use App\Models\Season;
use App\Models\Stats\DefensiveStat;
use App\Models\Stats\OffensiveStat;
use App\Models\Stats\PitchingStat;
use App\Models\Team\RosterPosition;
use App\Models\Team\Team;
use App\Models\Team\TeamPlayer;
use App\Modules\LineupGenerator;
use App\Modules\PitcherFocus;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $season = Season::orderBy('id', 'desc')->first();

        /** @var Team $team */
        foreach (Team::all() as $team) {

            $team_levels = $rotation = $order = [];
            /** @var RosterPosition $position */
            foreach (RosterPosition::all() as $position) {

                $position->randomizePositionIfMissing();
                $height = $position->position->randomPlayerHeight();
                $weight = $position->position->randomPlayerWeight($height['inches']);

                $class = $position->position->id === Position::PITCHER ? Pitcher::class : Batter::class;
                $level = $this->randomPlayerLevel($team, $team_levels);
                isset($team_levels[$level]) ? $team_levels[$level]++ : $team_levels[$level] = 0;

                /** @var Batter|Pitcher $player */
                $player = forward_static_call([$class, 'factory'])->make([
                    'type'              => $position->getPlayerModel(),
                    'level'             => $level,
                    'age'               => $team->league->randomPlayerAge(),
                    'position_id'       => $position->position->id,
                    'height'            => $height['inches'],
                    'height_class'      => (string) $height['class'],
                    'weight'            => $weight['pounds'],
                    'weight_class'      => (string) $weight['class']
                ]);

                $player->save();
                $this->createSkills($player);
                $this->createStats($season, $team, $player);

                $team_player = new TeamPlayer();
                $team_player->player_id = $player->id;
                $team_player->team_id = $team->id;
                $team_player->roster_position_id = $position->id;
                $team_player->save();
            }

            $lineup = new LineupGenerator($team);
            $team->default_lineup = json_encode($lineup->generate());
            $team->save();
        }
    }

    protected function createStats(Season $season, Team $team, Player $player)
    {
        $attributes = [
            'season_id' => $season->id,
            'team_id'   => $team->id,
            'player_id' => $player->id
        ];

        DefensiveStat::insert($attributes);

        $player instanceof Pitcher
            ? PitchingStat::insert($attributes)
            : OffensiveStat::insert($attributes);
    }

    protected function createSkills(Player $player)
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

        if ($player instanceof Pitcher) {
            return $this->createPitcherSkills($player, $focus);
        }

        return $this->createBatterSkills($player, $focus);
    }

    private function createBatterSkills(Batter $batter, array $focus)
    {
        $skill = new BatterSkill();
        $skill->player_id = $batter->id;

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

        foreach ($focus as $k => $v) {
            for ($i=0; $i<$v; $i++) {
                $attr = $list[$k][mt_rand(0, count($list[$k]) -1)];
                $skill->$attr ++;
            }
        }

        $batter->skill()->save($skill);
        return $batter;
    }

    private function createPitcherSkills(Pitcher $pitcher, array $focus)
    {
        $skill = new PitcherSkill();
        $skill->player_id = $pitcher->id;

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

        foreach ($focus as $k => $v) {
            for ($i=0; $i<$v; $i++) {
                $attr = $list[$k][mt_rand(0, count($list[$k]) -1)];
                $skill->$attr++;
            }
        }

        $pitcher->skill()->save($skill);
        return $pitcher;
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

    private function randomPlayerLevel(Team $team, array $team_levels): int
    {
        $avg = $team->league->averagePlayerLevel();

        do {

            $level = $team->league->randomPlayerLevel();
            $team_levels[$level] = $team_levels[$level] ?? 0;

        } while ($level <= $avg && $team_levels[$level] == 3 || $level > $avg && $team_levels[$level] == 2);

        return $level;
    }
}
