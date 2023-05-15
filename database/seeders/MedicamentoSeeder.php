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
        ]);  
        Medicamento::create([
            'nombre' => 'ASPIRINA',
            'concentracion' => '1 gramos',  
            'tipo' => 'Tableta',         
        ]);    
        Medicamento::create([
            'nombre' => 'AMPIBEX',
            'concentracion' => '100 gramos',  
            'tipo' => 'Capsula',        
        ]);

    }
}
