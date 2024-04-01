<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=> 'admin',
            'email'=> 'admin@gmail.com',
            'password' =>bcrypt('admin123')
        ]);

        User::create([
            'name'=> 'jocallyn',
            'email'=> 'jocallyn@gmail.com',
            'password' =>bcrypt('jocallyn123')
        ]);
    }
}
