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
            'statut' => 'actif',
            'user_id' => 1,
            'ville_id' => 2,
            'category_id'=> 2,
            'description' => 'Grande salle prestigieuse pour evenements internationaux de grande envergure.',
            'photos' => json_encode(['https://link-to-image1.jpg', 'https://link-to-image2.jpg']),
        ]);

    }
}
