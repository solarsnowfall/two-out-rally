<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Season>
 */
class SeasonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'day_order' => $this->generateDayOrder()
        ];
    }

    private function generateDayOrder(): array
    {
        $days = range(0, 34);
        shuffle($days);
        return $days;
    }
}
