<?php

namespace Database\Factories;

use App\Models\Show;
use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $numberPlaces = fake()->randomNumber($nbDigits = 3, $strict = true);
        $numberPlacesReserved = fake()->numberBetween(0, $numberPlaces);
        $shows = Show::get();

        return [
            'label' => fake()->sentence($nbWords = 3, $variableNbWords = true),
            'comment' => fake()->text(100),
            'generalNote' => fake()->randomFloat($nbMaxDecimals = 1, $min = 1, $max = 5),
            'numberPlaces' => $numberPlaces,
            'numberPlacesReserved' => $numberPlacesReserved,
            'is_open' => true,
            'urlImage' => fake()->imageUrl($width = 640, $height = 480, 'lorempixel/landscape'),
            'show_id' => $shows->random()->id,
        ];
    }
}
