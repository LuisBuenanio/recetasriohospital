<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicamentoReceta extends Model
{   
    use HasFactory;
    protected $table = 'medicamento_receta';
    protected $primaryKey = 'id';
    

    protected $fillable = [
        'cantidad',
        'indicaciones',
        'receta_id',
        'medicamento_id',
        
    ];
    protected $hidden = [
        'id',
        'receta_id',
        'medicamento_id',
     ];
     
    public $timestamps = false;

    //Relacion de uno a muchos
    public function receta(){
        return $this->belongsTo(Receta::class)->withTimestamps();
    }
    
    //Relacion de uno a muchos
    public function medicamento(){
        return $this->belongsTo(Medicamento::class)->withTimestamps();
    }
       
      

    
}
