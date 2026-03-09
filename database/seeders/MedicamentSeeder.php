<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Medicament;

class MedicamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Medicament::create([
            'nom' => 'Amoxicilline',
            'code' => 'AMX500',
            'prix' => 5000,
            'stock' => 10,
            'date_expiration' => '2025-12-31',
            'categorie_id' => 1, // Antibiotiques
        ]);

        Medicament::create([
            'nom' => 'Paracétamol',
            'code' => 'PAR500',
            'prix' => 1000,
            'stock' => 20,
            'date_expiration' => '2024-06-30',
            'categorie_id' => 2, // Antalgiques
        ]);

        Medicament::create([
            'nom' => 'Ibuprofène',
            'code' => 'IBU200',
            'prix' => 1500,
            'stock' => 15,
            'date_expiration' => '2025-03-31',
            'categorie_id' => 3, // Anti-inflammatoires
        ]);

        Medicament::create([
            'nom' => 'Correctol Collyre',
            'code' => 'CORR10',
            'prix' => 900,
            'stock' => 5,
            'date_expiration' => '2024-12-31',
            'categorie_id' => 4, // Collyres
        ]);

        Medicament::create([
            'nom' => 'Acfol',
            'code' => 'ACF30',
            'prix' => 3000,
            'stock' => 25,
            'date_expiration' => '2025-06-30',
            'categorie_id' => 5, // Vitamines et Supplements
        ]);

        Medicament::create([
            'nom' => 'Panalgic',
            'code' => 'PNG500',
            'prix' => 1500,
            'stock' => 10,
            'date_expiration' => '2028-09-12',
            'categorie_id' => 2, // Antalgigues
        ]);
        
    }
}
