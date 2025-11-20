<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Lembaga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // database/seeders/DatabaseSeeder.php
        Lembaga::create(['nama_lembaga' => 'Latiseducation']);
        Lembaga::create(['nama_lembaga' => 'Tutorindonesia']);
    }
}
