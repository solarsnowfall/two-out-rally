<?php

namespace Database\Factories;

use app\Models\Data\City;
use app\Models\Data\PlayerFirstName;
use app\Models\Data\PlayerLastName;
use App\Models\Player\Player;
use App\Models\Player\PlayerBackground;
use App\Models\Player\PlayerPersonality;
use App\Modules\Handedness;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'handedness'        => mt_rand(0, 1) ? Handedness::Left : Handedness::Right,
            'background_id'     => PlayerBackground::randomId(),
            'personality_id'    => PlayerPersonality::randomId(),
            'name'              => $this->randomName(),
            'hometown'          => $this->randomHometown(),
        ];
    }

    protected function randomHeight()
    {

    }

    protected function randomHometown(): string
    {
        /** @var City $city */
        $city = City::inRandomOrder()->first();
        return "{$city->name}, {$city->state}";
    }

    protected function randomName(): string
    {
        return PlayerFirstName::randomName() . ' ' . PlayerLastName::randomName();
    }
}
