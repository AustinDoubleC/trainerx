<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(5)->create();

         Listing::create([
            'title' => 'Yoga Trainer',
            'tags' => 'yoga',
            'company' => 'none',
            'location' => 'Nottingham',
            'email' => 'email@email.com',
            'website' => 'https://www.google.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula libero sit amet diam tempus, eget pretium justo scelerisque. Sed a pretium enim, et vestibulum justo. Etiam sodales nulla sit.',
            ] 
        );
        Listing::create([
            'title' => 'HIIT Trainer',
            'tags' => 'hiit',
            'company' => 'none',
            'location' => 'London',
            'email' => 'test@test.com',
            'website' => 'https://www.google.com',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula libero sit amet diam tempus, eget pretium justo scelerisque. Sed a pretium enim, et vestibulum justo. Etiam sodales nulla sit.',
            ] 
        );
    }
}
