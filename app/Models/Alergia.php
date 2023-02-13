<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alergia extends Model
{
    use HasFactory;
    protected $table = 'alergia';
    protected $primaryKey = 'id';


    protected $fillable = [
        
        'nombre',
        'slug',
        'descripcion',
        
    ];
    
    
    protected $hidden = [
        'id',
     ];
     
    public $timestamps = false;

    //Relacion de uno a muchos
    public function receta(){
        return $this->hasMany(Receta::class);
    }

        public function getRouteKeyName()
    {
        return 'slug';
    }
}
