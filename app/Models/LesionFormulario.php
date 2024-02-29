<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LesionFormulario extends Model
{
    use HasFactory;
    
    protected $table = 'lesion_formulario008';
    protected $primaryKey = 'id';


    protected $fillable = [
        'posiciones_x',
        'posiciones_y',
        'formulario008_id',
        'lesion_id',
        
    ];
    protected $hidden = [
        'id',
        'formulario008_id',
        'lesion_id',
     ];
     
    public $timestamps = false;

    //Relacion de uno a muchos
    public function formulario008(){
        return $this->belongsTo(formulario008::class)->withTimestamps();
    }
    
    //Relacion de uno a muchos
    public function lesion(){
        return $this->belongsTo(Lesion::class)->withTimestamps();
    }
   
}
