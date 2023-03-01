<?php

namespace Database\Seeders;

use App\Models\League;
use App\Models\Player\Position;
use App\Models\Team\Gambit;
use App\Models\Team\RosterPosition;
use App\Models\Team\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GambitSeeder extends Seeder
{
    protected array $positions = [];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default = json_decode('[{"id":"1","rule_num":"0","team_id":"1","rule_name":"Closer Rule (9th)","type":"rp","sub":"cp","backup_sub":"su1","position":"p","base":"-1","relief_reason":"st","leverage":"medium","outs":"-1","inning":"9","on_base":"ignore","focus":"ignore","handedness":"i"},
{"id":"2","rule_num":"1","team_id":"1","rule_name":"Hold Rule (SU1)","type":"rp","sub":"su1","backup_sub":"su2","position":"p","base":"-1","relief_reason":"st","leverage":"medium","outs":"-1","inning":"8","on_base":"ignore","focus":"ignore","handedness":"i"},
{"id":"3","rule_num":"2","team_id":"1","rule_name":"Hold Rule (SU2)","type":"rp","sub":"su2","backup_sub":"mr4","position":"p","base":"-1","relief_reason":"st","leverage":"medium","outs":"-1","inning":"8","on_base":"ignore","focus":"ignore","handedness":"i"},
{"id":"4","rule_num":"3","team_id":"1","rule_name":"Bridge to SU Man (MR1)","type":"rp","sub":"mr1","backup_sub":"mr3","position":"p","base":"-1","relief_reason":"st","leverage":"medium","outs":"-1","inning":"7","on_base":"ignore","focus":"ignore","handedness":"i"},
{"id":"5","rule_num":"4","team_id":"1","rule_name":"Bridge to SU Man (MR2)","type":"rp","sub":"mr2","backup_sub":"mr4","position":"p","base":"-1","relief_reason":"ex","leverage":"high","outs":"-1","inning":"6","on_base":"ignore","focus":"ignore","handedness":"i"},
{"id":"6","rule_num":"5","team_id":"1","rule_name":"Game Close (MR)","type":"rp","sub":"mr2","backup_sub":"mr4","position":"p","base":"-1","relief_reason":"ex","leverage":"high","outs":"-1","inning":"4","on_base":"ignore","focus":"ignore","handedness":"i"},
{"id":"7","rule_num":"6","team_id":"1","rule_name":"Game in Reach (MR)","type":"rp","sub":"mr3","backup_sub":"mr1","position":"p","base":"-1","relief_reason":"ex","leverage":"medium","outs":"-1","inning":"4","on_base":"ignore","focus":"ignore","handedness":"i"},
{"id":"8","rule_num":"7","team_id":"1","rule_name":"Game Losing Reach (MR)","type":"rp","sub":"mr4","backup_sub":"mr2","position":"p","base":"-1","relief_reason":"ex","leverage":"low","outs":"-1","inning":"4","on_base":"ignore","focus":"ignore","handedness":"i"},
{"id":"9","rule_num":"8","team_id":"1","rule_name":"Garbage Inning Rule","type":"rp","sub":"lr","backup_sub":"mr1","position":"p","base":"-1","relief_reason":"ex","leverage":"very low","outs":"-1","inning":"4","on_base":"ignore","focus":"ignore","handedness":"i"},
{"id":"10","rule_num":"9","team_id":"1","rule_name":"Shelled Starting Pitcher","type":"rp","sub":"lr","backup_sub":"mr2","position":"p","base":"-1","relief_reason":"ra4","leverage":"ignore","outs":"-1","inning":"4","on_base":"ignore","focus":"ignore","handedness":"i"}]');
        $rows = [];

        /** @var League $league */
        foreach (League::all() as $league) {
            /** @var Team $team */
            foreach ($league->teams as $team) {
                foreach ($default as $k => $def) {
                    $rows[] = [
                        'team_id' => $team->id,
                        'priority' => $k+1,
                        'type' => 'relieve_pitcher',
                        'position_id' => Position::PITCHER,
                        'sub_roster_position_id' => $this->getPositionId($def->sub),
                        'bu_sub_roster_position_id' => $this->getPositionId($def->backup_sub),
                        'name' => $def->rule_name,
                        'relief_reason' => $this->getReliefReason($def->relief_reason),
                        'leverage' => $this->getLeverage($def->leverage),
                        'inning' => $def->inning
                    ];
                }
            }
            Gambit::insert($rows);
        }
    }

    private function getLeverage(string $abbrv)
    {
        return str_replace(' ', '_', $abbrv);
    }

    private function getReliefReason(string $abbrv): string
    {
        return match($abbrv) {
            'ex' => 'exhaustion',
            'ra1' => 'one_run_allowed',
            'ra2' => 'two_runs_allowed',
            'ra3' => 'three_runs_allowed',
            'ra4' => 'four_runs_allowed',
            'ra5' => 'five_runs_allowed',
            'st' => 'situational'
        };
    }

    private function getPositionId(string $abbrv): int
    {
        if (!isset($this->positions[$abbrv])) {
            $this->positions[$abbrv] = RosterPosition::whereAbbrv(strtoupper($abbrv))->first();
        }

        return $this->positions[$abbrv]->id;
    }
}
