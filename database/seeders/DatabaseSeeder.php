<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([

            'name' => 'client 1',
            'email' => 'andy@gmail.com',
            'password' => bcrypt('andymush'),
            'type'=>1,
        ]);

        \App\Models\User::factory()->create([

            'name' => 'Trainer George',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('andymush'),
            'type'=>1,
        ]);
    }
}
