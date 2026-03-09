<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    protected $fillable = [
        'medicament_id',
        'vendeur_id',
        'quantite',
        'prix_vente'
    ];
}
