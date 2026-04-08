<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    protected $fillable = [
        'user_id',
        'salle_id',
        'date_debut',
        'date_fin',
        'statut',
        'note_client'
    ];

    public function client():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function salle():BelongsTo
    {
        return $this->belongsTo(Salle::class);
    }
}
