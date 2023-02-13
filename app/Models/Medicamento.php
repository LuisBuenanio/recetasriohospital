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
        'codigo',
        'nombre',
        'slug',
        'fabricante',
        'gramos',
        'tipo_medicamento_id'
        
    ];
    
    
    protected $hidden = [
        'id',
        'tipo_medicamento_id',
     ];
     
    public $timestamps = false;

    /*   Relacion de uno a muchos inversa */
    public function tipo_medicamento(){
        return $this->belongsTo(TipoMedicamento::class);
    }

    //Relacion de uno a muchos
    public function receta(){
        return $this->hasMany(Receta::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
