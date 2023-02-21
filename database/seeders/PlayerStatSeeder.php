<?php

namespace Database\Seeders;

use App\Models\League;
use App\Models\Player\Batter;
use App\Models\Player\Player;
use App\Models\Season;
use App\Models\Stats\DefensiveStat;
use App\Models\Stats\OffensiveStat;
use App\Models\Stats\PitchingStat;
use App\Models\Team\Team;
use Illuminate\Database\Seeder;

class PlayerStatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $season = Season::currentSeason();
        /** @var League $league */
        foreach (League::all() as $league) {
            $defensive = $offensive = $pitching = [];
            /** @var Team $team */
            foreach ($league->teams as $team) {
                /** @var Player $player */
                foreach ($team->players as $player) {
                    if ($player instanceof Batter) {
                        $offensive[] = $this->newRow($season, $team, $player);
                    } else {
                        $pitching[] = $this->newRow($season, $team, $player);
                    }
                    $defensive[] = $this->newRow($season, $team, $player);
                }
            }
            DefensiveStat::insert($defensive);
            OffensiveStat::insert($offensive);
            PitchingStat::insert($pitching);
        }
    }

    protected function newRow(Season $season, Team $team, Player $player): array
    {
        return [
            'season_id' => $season->id,
            'team_id' => $team->id,
            'player_id' => $player->id
        ];
    }
}
