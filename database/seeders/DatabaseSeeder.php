<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(50)->create();

        User::factory()->create([
            'name' => 'Test User',
            'ci_card' => 26480886,
            'city' => 'barquisimeto',
            'address' => 'calle 6',
            'phone' => 4145145578,
            'email' => 'test@example.com',
            'username' =>"Escaleo",
        ]);
    }
}
