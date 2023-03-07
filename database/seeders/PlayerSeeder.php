<?php

namespace Database\Seeders;

use App\Models\Player\Batter;
use App\Models\Player\Pitcher;
use App\Models\Player\Player;
use App\Models\Team\RosterPosition;
use App\Models\Team\Team;
use App\Models\Team\TeamPlayer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var Team $team */
        foreach (Team::all() as $team) {

            $team_levels = $players = $team_players = [];
            /** @var RosterPosition $position */
            foreach (RosterPosition::all() as $position) {

                $position->randomizePositionIfMissing();
                $height = $position->position->randomPlayerHeight();
                $weight = $position->position->randomPlayerWeight($height['inches']);

                $class = $position->getPlayerModel();
                $level = $this->randomPlayerLevel($team, $team_levels);
                isset($team_levels[$level]) ? $team_levels[$level]++ : $team_levels[$level] = 0;

                /** @var Batter|Pitcher $player */
                $player = forward_static_call([$class, 'factory'])->make([
                    'type'              => $class,
                    'level'             => $level,
                    'age'               => $team->league->randomPlayerAge(),
                    'position_id'       => $position->position->id,
                    'height'            => $height['inches'],
                    'height_class'      => (string) $height['class'],
                    'weight'            => $weight['pounds'],
                    'weight_class'      => (string) $weight['class']
                ]);

                $players[$position->id] = $player->getAttributes();
            }

            Player::insert($players);
            $players = $this->fetchPlayers();

            foreach ($players as $key => $player) {
                $team_players[] = [
                    'player_id'             => $player->id,
                    'team_id'               => $team->id,
                    'roster_position_id'    => $key + 1
                ];
            }

            TeamPlayer::insert($team_players);
        }
    }

    /**
     * @return Player[]
     */
    protected function fetchPlayers(): array
    {
        $players = [];

        $sql =  'SELECT `players`.* FROM `players` ' .
                'LEFT JOIN `team_players` ON `team_players`.`player_id` = `players`.`id` ' .
                'WHERE `team_players`.`id` IS NULL ' .
                'ORDER BY `players`.`id` ASC';

        foreach (DB::connection()->select($sql) as $row) {
            $player = new Player((array) $row);
            $players[] = $player;
        }

        return $players;
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
