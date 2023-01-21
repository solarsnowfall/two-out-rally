<?php

namespace Database\Factories;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player\Batter>
 */
class BatterFactory extends PlayerFactory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'handedness'    => mt_rand(0, 1) ? 'l' : 'r',
            'position_id'   => null,
            'name'          => ''
        ];
    }
}
