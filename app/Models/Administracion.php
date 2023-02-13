<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administracion extends Model
{
    use HasFactory;
    protected $table = 'administracion';
    protected $primaryKey = 'id';


    protected $fillable = [
        'dosis',
        'hora',
        'horario',
        'tipo_administracion_id'
        
    ];
    
    
    protected $hidden = [
        'id',
        'tipo_administracion_id',
     ];
     
    public $timestamps = false;

    /*   Relacion de uno a muchos inversa */
    public function tipo_administracion(){
        return $this->belongsTo(TipoAdministracion::class);
    }

    //Relacion de uno a muchos
    public function receta(){
        return $this->hasMany(Receta::class);
    }

    
}
