<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosticoscie10Formulario008 extends Model
{
    use HasFactory;  
    protected $table = 'diagnosticoscie10_formulario008';
    protected $primaryKey = 'id';
    

    protected $fillable = [
        'formulario008_id',
        'diagnosticoscie10_id',
        
    ];
    protected $hidden = [
        'id',
        'formulario008_id',
        'diagnosticoscie10_id',
     ];
     
    public $timestamps = false;

    //Relacion de uno a muchos
    public function formulario008(){
        return $this->belongsTo(Formulario008::class)->withTimestamps();
    }
    
    //Relacion de uno a muchos
    public function diagnosticoscie10(){
        return $this->belongsTo(Diagnosticoscie10::class)->withTimestamps();
    }         

    
}
