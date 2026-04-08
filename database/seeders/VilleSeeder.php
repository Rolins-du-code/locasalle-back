<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $villes = ['Douala', 'Yaounde', 'Bafoussam', 'Garoua', 'Kribi'];
        foreach ($villes as $ville) {
            \App\Models\Ville::create(['nom' => $ville]);
        }
    }
}
