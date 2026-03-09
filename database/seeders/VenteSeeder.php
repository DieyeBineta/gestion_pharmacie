<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vente;

class VenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vente::create([
            'vendeur_id' => 1,
            'medicament_id' => 2,
            'quantite' => 2,
            'prix_vente' => 2000
        ]);

        Vente::create([
            'vendeur_id' => 2,
            'medicament_id' => 5,
            'quantite' => 1,
            'prix_vente' => 3000
        ]);
    }
}
