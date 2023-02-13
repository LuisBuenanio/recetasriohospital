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
        'categoriascie10_id'
	];

    protected $hidden = [
        'id',
        'categoriascie10_id',
    ];

    public $timestamps = false;

    /*   Relacion de uno a muchos inversa */
    public function categoriascie10(){
        return $this->belongsTo(Categoriascie10::class);
    }

    //Relacion de uno a muchos
    public function receta(){
        return $this->hasMany(Receta::class);
    }

    public function getRouteKeyName()
    {
        return 'descripcion';
    }
}
