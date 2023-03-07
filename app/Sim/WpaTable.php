<?php

namespace App\Sim;

use App\Models\WpaCondition;
use App\Modules\Side;
use Illuminate\Support\Facades\Cache;

class WpaTable
{
    /**
     * @var array
     */
    protected array $tree = [];

    /**
     * @var array[]
     */
    protected array $branches = [
        'inning' => [
            'batting' => [
                'outs' => [
                    'bases' => [
                        'down_by_five',
                        'down_by_four',
                        'down_by_three',
                        'down_by_two',
                        'down_by_one',
                        'tied',
                        'up_by_one',
                        'up_by_two',
                        'up_by_three',
                        'up_by_four',
                        'up_by_five'
                    ]
                ]
            ]
        ]
    ];

    /**
     *
     */
    public function __construct()
    {
        $this->buildTree(static::fetchModels());
    }

    /**
     * @return WpaCondition[]
     */
    public static function fetchModels(): array
    {
        $models = [];

        foreach (static::fetchRows() as $attributes) {
            $models[] = new WpaCondition($attributes);
        }

        return $models;
    }

    /**
     * @return array
     */
    protected static function fetchRows(): array
    {
        $rows = Cache::get('wpa_conditions', []);

        if (!empty($rows)) {
            return $rows;
        }

        $rows = [];

        foreach (WpaCondition::all() as $wpa_condition) {
            $rows[] = $wpa_condition->getAttributes();
        }

        Cache::set('wpa_conditions', $rows);

        return $rows;
    }

    /**
     * @param array $rows
     * @return void
     */
    protected function buildTree(array $rows)
    {
        /** @var WpaCondition $wpa */
        foreach ($rows as $wpa) {
            $this->buildBranch($this->tree, $this->branches, $wpa);
        }
    }

    /**
     * @param array $tree
     * @param array $branches
     * @param WpaCondition $wpa
     * @return void
     */
    public function buildBranch(array &$tree, array $branches, WpaCondition $wpa)
    {
        foreach ($branches as $key => $val) {

            if (is_string($key)) {

                $key = $this->branchKey($key, $wpa);

                if (!isset($tree[$key])) {
                    $tree[$key] = [];
                }

                $this->buildBranch($tree[$key], $val, $wpa);

            } else {

                $tree[$val] = $wpa->$val;
            }
        }
    }

    private function branchKey(string $key, WpaCondition $wpa): string
    {
        return match($key) {
            'inning', 'batting', 'outs' => $wpa->$key,
            'bases' => $wpa->first . $wpa->second . $wpa->third
        };
    }

    public function getTree()
    {
        return $this->tree;
    }

    public function getWpa(Game $game): float
    {
        $inning = $this->gameInningKey($game);
        $side = Side::toString($game->side);
        $outs = $game->outs <= 2 ? $game->outs : 0;
        $bases = $this->gameBasesKey($game);
        $runs = $this->gameRunsKey($game);

        return $this->tree[$inning][$side][$outs][$bases][$runs];
    }

    public function gameBasesKey(Game $game): string
    {
        $key = '';

        foreach ($game->bases as $base) {
            $key .= $base !== null ? '1' : '0';
        }

        return $key;
    }

    public function gameInningKey(Game $game)
    {
        $inning = $game->outs < 3 ? $game->inning : $game->inning + 1;
        return min($inning, 10);
    }

    public function gameRunsKey(Game $game): string
    {
        $runs = !$game->side
            ? $game->runsAway - $game->runsHome
            : $game->runsHome - $game->runsAway;

        $runs = max(min($runs, 5), -5);

        return match($runs) {
            -5 => 'down_by_five',
            -4 => 'down_by_four',
            -3 => 'down_by_three',
            -2 => 'down_by_two',
            -1 => 'down_by_one',
            0 => 'tied',
            1 => 'up_by_one',
            2 => 'up_by_two',
            3 => 'up_by_three',
            4 => 'up_by_four',
            5 => 'up_by_five'
        };
    }
}
