<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Paciente;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paciente::create([
            'cedula' => '0605329606',
            'nombre' => 'USUARIO DE PRUEBA ',  
            'fecha_nacimiento' => '1996-08-31', 
            'edad' => '26',              
            'telefono' => '0987654321',     
            'email' => 'prueba@prueba.com',     
            'direccion' => 'RIOBAMBA',     
            'sexo_id' => '1',          
        ]); 
    }
}
