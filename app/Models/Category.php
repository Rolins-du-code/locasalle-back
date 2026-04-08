<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = ['nom'];

    public function salles(): HasMany
    {
        return $this->hasMany(Salle::class);
    }
}
