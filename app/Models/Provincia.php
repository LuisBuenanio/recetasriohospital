<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $table = 'provincias';
	protected $primaryKey = 'id';

    protected $fillable = [
		'descripcion',
	];

    protected $hidden = [
        'id',
    ];

    public $timestamps = false;


    public function ciudades()
    {
        return $this->hasMany(Ciudad::class);
    }

    public function pacientes()
    {
        return $this->hasManyThrough(Paciente::class, Ciudad::class);
    }
}
