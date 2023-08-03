<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;
    protected $table = 'medicamento';
    protected $primaryKey = 'id';


    protected $fillable = [
        'nombre',
        'comercial',
        'concentracion',    
        'presentacion',      
        'paciente_id'
        
    ];
    
    
    protected $hidden = [
        'id',
     ];
     
    public $timestamps = false;

    

    //Relacion de uno a muchos
    public function recetas(){
        return $this->belongsToMany(Receta::class)->withPivot('cantidad', 'indicacion')->withTimestamps();
    } 
   
    public function getNombreCompletoAttribute()
{
    return "{$this->nombre} ({$this->comercial}) {$this->concentracion} {$this->presentacion}";
}

 
    public function getRouteKeyName()
    {
        return 'nombre';
    }
}
