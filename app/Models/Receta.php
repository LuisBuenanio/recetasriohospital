<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;
    protected $table = 'receta';
    protected $primaryKey = 'id';


    protected $fillable = [
        'codigo',
        'ciudad',
        'fecha',
        'observaciones',
        'users_id',
        'alergia_id',
        'medicamento_id',
        'administracion_id',
        'diagnosticoscie10_id',
        'paciente_id'
        
    ];
    
    
    protected $hidden = [
        'id',
        'users_id',
        'alergia_id',
        'medicamento_id',
        'administracion_id',
        'diagnosticoscie10_id',
        'paciente_id'
     ];
     
    public $timestamps = false;

    /*   Relacion de uno a muchos inversa Médicos*/
    public function users(){
        return $this->belongsTo(User::class);
    }

    /*   Relacion de uno a muchos inversa  Alergia*/
    public function alergia(){
        return $this->belongsTo(Alergia::class);
    }

    /*   Relacion de uno a muchos inversa Medicamento */
    public function medicamento(){
        return $this->belongsTo(Medicamento::class);
    }
    
    /*   Relacion de uno a muchos inversa Administracion */
    public function administracion(){
        return $this->belongsTo(Administracion::class);
    }
    /*   Relacion de uno a muchos inversa */
    public function diagnosticoscie10(){
        return $this->belongsTo(Diagnosticoscie10::class);
    }
    
    
    /*   Relacion de uno a muchos inversa Paciente */
    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }

    
    

    public function getRouteKeyName()
    {
        return 'codigo';
    }
}
