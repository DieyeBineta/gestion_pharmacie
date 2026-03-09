<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Medicament extends Model
{
    protected $fillable = [
        'nom',
        'code',
        'prix',
        'stock',
        'date_expiration',
        'categorie_id',
    ];

    public function categorie() : BelongsTo{
        return $this->belongsTo(Categorie::class); 
    }
}
