<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Medicamento;

class MedicamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medicamento::create([
            'nombre' => 'PARACETAMOL',
            'concentracion' => '500 gramos',  
            'tipo' => 'Jarabe',              
            'users_id' => '1',          
        ]);  
        Medicamento::create([
            'nombre' => 'ASPIRINA',
            'concentracion' => '1 gramos',  
            'tipo' => 'Tableta',              
            'users_id' => '1',          
        ]);  

    }
}
