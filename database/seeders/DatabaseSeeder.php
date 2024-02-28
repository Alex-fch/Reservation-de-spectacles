<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\CitySeeder;
use Database\Seeders\ArtistSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(ArtistSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(ShowSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(ConcertHallSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
