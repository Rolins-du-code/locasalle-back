<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        'user_id',
        'ville_id',
        'category_id',
        'statut',
    ];
    // vue que les photos sont stockées en json, je dois les caster en tableau pour pouvoir les manipuler facilement
    protected $casts = [
        'photos' => 'array',
    ];

    // La salle appartient à un utilisateur (propriétaire ou prestataire)=>user

        public function prestataire():BelongsTo
        {
            return $this->belongsTo(User::class, 'user_id');
        }

        public function ville():BelongsTo
        {
            return $this->belongsTo(Ville::class, 'ville_id');
        }

        public function category():BelongsTo
        {
            return $this->belongsTo(Category::class, 'category_id');
        }

        // vue que une salle peut avoir plusieurs reservations, je defini une relation hasMany avec la classe Reservation

        public function reservations():HasMany
        {
            return $this->hasMany(Reservation::class);
        }
}
