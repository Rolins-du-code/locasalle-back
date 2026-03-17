<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    // je definis les champs qui peuvent être remplis grace a mon application
    protected $fillable = [
        'nom',
        'emplacement',
        'capacite',
        'prix_par_jour',
        'description',
        'photos',
    ];
    // vue que les photos sont stockées en json, je dois les caster en tableau pour pouvoir les manipuler facilement
    protected $casts = [
        'photos' => 'array',
    ];
}
