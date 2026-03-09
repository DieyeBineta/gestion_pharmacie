<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::create([
            'nom' => 'Antibiotiques',
            'description' => 'Médicaments utilisés pour traiter les infections bactériennes.',
        ]);

        Categorie::create([
            'nom' => 'Antalgiques',
            'description' => 'Médicaments utilisés pour soulager la douleur.',
        ]);

        Categorie::create([
            'nom' => 'Anti-inflammatoires',
            'description' => 'Médicaments utilisés pour réduire l’inflammation.',
        ]);

        Categorie::create([
            'nom' => 'Collyres',
            'description' => 'Médicaments utilisés pour traiter les affections oculaires',
        ]);

        Categorie::create([
            'nom' => 'Vitamines et Supplements',
            'description' => 'Médicaments contenant des vitamines et des compléments alimentaires.',
        ]);
    }
}
