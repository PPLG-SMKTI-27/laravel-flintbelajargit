<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat user demo
        User::create([
            'name' => 'Flint',
            'email' => 'admin@portfolio.dev',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        // Seed projects
        $this->call(ProjectSeeder::class);
    }
}