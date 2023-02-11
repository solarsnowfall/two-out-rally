<?php

namespace Database\Factories\Player;

use app\Models\Data\City;
use app\Models\Data\PlayerFirstName;
use app\Models\Data\PlayerLastName;
use App\Models\Player\Player;
use App\Models\Player\PlayerBackground;
use App\Models\Player\PlayerPersonality;
use App\Models\Season;
use App\Modules\Chance;
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
        $season = Season::currentSeason();

        return [
            'handedness'        => mt_rand(0, 1) ? Handedness::Left : Handedness::Right,
            'background_id'     => PlayerBackground::randomId(),
            'personality_id'    => PlayerPersonality::randomId(),
            'name'              => $this->randomName(),
            'hometown'          => $this->randomHometown(),
            'birth_day'         => $season->day,
            'birth_season'      => $season->id
        ];
    }

    protected function randomHometown(): string
    {
        /** @var City $city */
        $city = City::inRandomOrder()->first();
        return $city->cityAndState();
    }

    protected function randomName(): string
    {
        $name = PlayerFirstName::randomName() . ' ' . PlayerLastName::randomName();

        if ($suffix = $this->randomNameSuffix()) {
            $name .= ", $suffix";
        }

        return $name;
    }

    protected function randomNameSuffix(): string
    {
        $roll = Chance::roll();
        return match(true) {
            $roll == 1.0 => 'V',
            $roll >= 0.998 => 'IV',
            $roll >= 0.994 => 'III',
            $roll >= 0.95 => 'Jr',
            default => ''
        };
    }
}
