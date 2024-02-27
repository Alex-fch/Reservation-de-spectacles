<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Show>
 */
class ShowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'label' => fake()->sentence($nbWords = 3, $variableNbWords = true),
            'comment' => fake()->optional()->text(100),
            'duration' => fake()->numberBetween(30, 200),
        ];
    }
}
