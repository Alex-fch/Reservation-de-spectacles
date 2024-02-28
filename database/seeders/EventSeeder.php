<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::get();
        $tags = Tag::get();

        \App\Models\Event::factory(50)->create()->each(function ($event) use ($categories, $tags) {
            $category = $categories->random(); // Utiliser la méthode random() pour obtenir un artiste aléatoire
            $event->categories()->attach($category->id); // Utiliser attach() avec l'ID de l'artiste
            $tag = $tags->random();
            $event->tags()->attach($tag->id);
        });
    }
}
