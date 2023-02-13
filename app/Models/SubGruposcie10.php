<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubGruposcie10 extends Model
{
    use HasFactory;
    
    protected $table = 'subgruposcie10';
	protected $primaryKey = 'id';

    protected $fillable = [
		'clave',
        'descripcion',
        'gruposcie10_id'
	];

    protected $hidden = [
        'id',
        'gruposcie10_id',
    ];

    public $timestamps = false;

    /*   Relacion de uno a muchos inversa */
    public function gruposcie10(){
        return $this->belongsTo(Gruposcie10::class);
    }
    
    /* Relacion de uno a muchos */
    public function categoriascie10(){
        return $this->hasMany(Categoriascie10::class);
    }

    public function getRouteKeyName()
    {
        return 'descripcion';
    }

    
}
