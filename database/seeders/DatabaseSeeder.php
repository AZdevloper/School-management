<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Event;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserSeeder::class,
            TeacherSeeder::class,
            AdminSeeder::class,
            StudentSeeder::class,
            ActivitySeeder::class,
            EventSeeder::class,
            HomeWorkSeeder::class,
            ResultSeeder::class,
            FeedbackSeeder::class,
            
        ]);
    }
}
