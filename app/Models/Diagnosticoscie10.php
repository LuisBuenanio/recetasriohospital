<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosticoscie10 extends Model
{
    use HasFactory;
    protected $table = 'diagnosticoscie10';
	protected $primaryKey = 'id';

    protected $fillable = [
		'clave',
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

    //Relacion de uno a muchos
    public function formulario008(){
        return $this->hasMany(formulario008::class);
    }

    public function getRouteKeyName()
    {
        return 'descripcion';
    }
}
