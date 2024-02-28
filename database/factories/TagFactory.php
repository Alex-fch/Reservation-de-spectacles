<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $data = [
            '#DrameIntense',
            '#ConcertAcoustique',
            '#BalletClassique',
            '#HumourSatirique',
            '#SpectacleÉquestre',
            '#OpéraModerne',
            '#MagieClose-Up',
            '#ImprovisationMusicale',
            '#SpectacleJeunePublic',
            '#ExpositionInteractive'
        ];

        return [
            'name' => fake()->unique()->randomElement($data)
        ];
    }
}
