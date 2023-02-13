<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    use HasFactory;
    protected $table = 'sexo';
	protected $primaryKey = 'id';

    protected $fillable = [
		'descripcion',
	];

    protected $hidden = [
        'id',
    ];

    public $timestamps = false;

    /* Relacion de uno a muchos */
    public function paciente(){
        return $this->hasMany(Paciente::class);
    }

    public function getRouteKeyName()
    {
        return 'descripcion';
    }
}
