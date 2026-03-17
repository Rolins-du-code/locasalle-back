<?php

namespace Database\Seeders;

use App\Models\Salle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Salle::create([
            'nom' => 'palais des congrès',
            'emplacement' => 'yaoundé, cameroun',
            'capacite' => 1500,
            'prix_par_jour' => 5000000.00,
            'description' => 'Grande salle prestigieuse pour evenements internationaux de grande envergure.',
            'photos' => json_encode(['https://via.placeholder.com/400x300.png?text=Palais+des+Congrès', 'https://example.com/photos/salleA2.jpg']),
        ]);

        Salle::create([
            'nom' => 'Foyer Bandjoun',
            'emplacement' => 'Bafoussam, cameroun',
            'capacite' => 500,
            'prix_par_jour' => 1500000.00,
            'description' => 'Salle de culture et de loisirs spacieuse.',
            'photos' => json_encode(['https://via.placeholder.com/400x300.png?text=Foyer+Bandjoun', 'https://example.com/photos/salleB2.jpg']),
        ]);
    }
}
