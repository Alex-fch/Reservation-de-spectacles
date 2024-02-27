<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artists = Artist::all();

        \App\Models\Show::factory(250)->create()->each(function ($show) use ($artists) {
            $artist = $artists->random(); // Utiliser la méthode random() pour obtenir un artiste aléatoire
            $show->artists()->attach($artist->id); // Utiliser attach() avec l'ID de l'artiste
        });
    }
}
