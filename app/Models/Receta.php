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
        'ciudad',
        'fecha',
        'historia',        
        'aler',
        'alergia',
        'signos',
        'sugerencia', 
        'medico',
        'paciente_id',
        'users_id', 
        'medicamento_id',
        'diagnosticoscie10_id',
        
    ];
    
    
    /* protected $hidden = [
        'id',
        'users_id',
        'medicamento_id',
        'diagnosticoscie10_id',
        'paciente_id'
     ]; */
     
    public $timestamps = false;



     /*   Relacion de uno a muchos inversa Medicamento */
     public function medicamentos(){
        return $this->belongsToMany(Medicamento::class)->withPivot('cantidad', 'indicacion')->withTimestamps();
    }

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
    

    public function getRouteKeyName()
    {
        return 'historia';
    }
}
