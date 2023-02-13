<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoriascie10 extends Model
{
    use HasFactory;
    
    protected $table = 'categoriascie10';
	protected $primaryKey = 'id';

    protected $fillable = [
		'clave',
        'descripcion',
        'subgruposcie10_id'
	];

    protected $hidden = [
        'id',
        'subgruposcie10_id',
    ];

    public $timestamps = false;

    /*   Relacion de uno a muchos inversa */
    public function subgruposcie10(){
        return $this->belongsTo(Subgruposcie10::class);
    }
    
    /* Relacion de uno a muchos */
    public function diagnosticos10(){
        return $this->hasMany(Diagnosticoscie10::class);
    }

    public function getRouteKeyName()
    {
        return 'descripcion';
    }
}
