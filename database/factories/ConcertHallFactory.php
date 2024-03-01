<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ConcertHall>
 */
class ConcertHallFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //$cities = City::get();
        //$countries = Country::get();

        return [
            'name' => fake()->title(),
            'comment' => fake()->optional()->text(100),
            'numberPlaces' => fake()->numberBetween(100, 5000),
            'date' => fake()->dateTimeBetween('now', '+1 year'),
            'time' => fake()->time('H:i'),
            'adress_street' => fake()->streetName(),
            'country_id' => Country::factory(), //$countries->random()->id,
            'city_id' => City::factory() // $cities->random()->id,
        ];
    }
}
