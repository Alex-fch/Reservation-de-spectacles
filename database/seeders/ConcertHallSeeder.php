<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ConcertHallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = Event::all();

        \App\Models\ConcertHall::factory(250)->create()->each(function ($concertHall) use ($events) {
            $event = $events->random(); // Utiliser la méthode random() pour obtenir un artiste aléatoire
            $concertHall->events()->attach($event->id); // Utiliser attach() avec l'ID de l'artiste
        });
    }
}
