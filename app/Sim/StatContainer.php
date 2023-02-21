<?php

namespace App\Sim;

use App\Models\Player\Player;
use App\Models\Sim\Series as SeriesModel;

abstract class StatContainer
{
    public Game $game;
    public SeriesModel $series;
    protected array $stats = [];
    protected string $class;

    /**
     * @param SeriesModel $series
     * @param Game $game
     */
    public function __construct(SeriesModel $series, Game $game)
    {
        $this->series = $series;
        $this->game = $game;
        $this->stats = $this->generateStats();
    }

    /**
     * @param Player $player
     * @return mixed
     */
    public function forPlayer(Player $player)
    {
        return $this->stats[$player->id];
    }

    /**
     * @return array
     */
    public function generateStats(): array
    {
        $sides = ['away', 'home'];
        $stats = [];

        foreach ($sides as $side) {
            /** @var Player $player */
            foreach ($this->players($side) as $player) {
                $stats[$player->id] = new $this->class([
                    'player_id' => $player->id,
                    'team_id' => $this->game->$side->id,
                    'season_id' => $this->series->season_id
                ]);
            }
        }

        return $stats;
    }

    /**
     * @return mixed
     */
    public function save()
    {
        foreach (array_keys($this->stats) as $player_id) {
            $this->stats[$player_id]->game_id = $this->game->id;
        }

        return forward_static_call([$this->class, 'insert'], $this->stats);
    }

    abstract protected function players(string $side): array;
}
