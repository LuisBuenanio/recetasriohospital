<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario008 extends Model
{
    use HasFactory;

    protected $table = 'formulario008';
    protected $primaryKey = 'id';

    protected $guarded = ['id','created_at','update_at'];

     /*   Relacion de uno a muchos inversa Médicos*/
     public function users(){
        return $this->belongsTo(User::class);
    }

    /*   Relacion de uno a muchos inversa */
    public function diagnosticoscie10(){
        return $this->belongsTo(Diagnosticoscie10::class);
    }
    
   
    
    /*   Relacion de uno a muchos inversa Paciente */
    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }   


 

    public function lesiones()
    {
        return $this->belongsToMany(Lesion::class, 'lesion_formulario008')
                    ->withPivot('posicion_x', 'posicion_y');
    }
    

    public function getRouteKeyName()
    {
        return 'codigo';
    }
}
