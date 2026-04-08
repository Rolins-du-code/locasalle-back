<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'Kaptue Roli',
            'email' => 'test@example.com',
            'password'=> bcrypt('password'),
            'telephone' => 688851949,
            'role'=> 'prestraire',
        ]);

        $this->call([
            VilleSeeder::class,
            CategorySeeder:: class,
            SalleSeeder::class
        ]);
    }
}
