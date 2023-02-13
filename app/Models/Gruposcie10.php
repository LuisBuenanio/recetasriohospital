<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gruposcie10 extends Model
{
    use HasFactory;
    protected $table = 'gruposcie10';
	protected $primaryKey = 'id';

    protected $fillable = [
		'clave',
        'descripcion',
	];

    protected $hidden = [
        'id',
    ];

    public $timestamps = false;

    /* Relacion de uno a muchos */
    public function subgruposcie10(){
        return $this->hasMany(Subgruposcie10::class);
    }

    public function getRouteKeyName()
    {
        return 'clave';
    }
}
