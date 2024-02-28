<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $data = [
            'Théâtre',
            'Musique',
            'Danse',
            'Comédie',
            'Cirque',
            'Opéra',
            'Magie',
            'Improvisation',
            'Spectacle pour enfants',
            'Arts visuels'
        ];

        return [
            'name' => fake()->unique()->randomElement($data)
        ];
    }
}
