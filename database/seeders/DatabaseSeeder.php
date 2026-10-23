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
    public function run(): void
    {
        user::create([
            'nama' => 'Administrator',
            'email' => 'admin@example.com',
            'role' => '1',
            'status' => 1,
            'hp' => '08123456789',
            'password' => bcrypt('password')
        ]);
        user::create([
            'nama' => 'Wil Meow',
            'email' => 'wil@example.com',
            'role' => '0',
            'status' => 1,
            'hp' => '08123456789',
            'password' => bcrypt('password')
        ]);
    }
}
