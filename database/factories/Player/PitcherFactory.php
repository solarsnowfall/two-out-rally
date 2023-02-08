<?php

namespace Database\Factories\Player;

use App\Models\Player\Pitcher;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PitcherFactory extends PlayerFactory
{
    protected $model = Pitcher::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return parent::definition();
    }
}
