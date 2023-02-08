<?php

namespace Database\Factories\Player;

use App\Models\Player\Batter;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player\Batter>
 */
class BatterFactory extends PlayerFactory
{
    protected $model = Batter::class;

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
