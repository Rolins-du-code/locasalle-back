<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cats = ['Mariage', 'COnference', 'Anniversaire', 'Concert', 'Reunion'];
        foreach ($cats as $cat) {
            \App\Models\Category::create(['libelle' => $cat]);
        }
    }
}
