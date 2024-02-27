<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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

        return [
            'label' => fake()->sentence($nbWords = 3, $variableNbWords = true),
            'comment' => fake()->text(100),
            'date' => fake()->dateTimeBetween('now', '+1 year'),
            'time' => fake()->time('H:i'),
            'generalNote' => fake()->randomFloat($nbMaxDecimals = 1, $min = 1, $max = 5),
            'numberPlaces' => $numberPlaces,
            'numberPlacesReserved' => $numberPlacesReserved,
            'is_open' => true,

        ];
    }
}