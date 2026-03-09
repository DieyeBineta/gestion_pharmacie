<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'nom',
        'description'
    ];

    public function medicaments(): HasMany {
        return $this->hasMany(Medicament::class);
    }
}
