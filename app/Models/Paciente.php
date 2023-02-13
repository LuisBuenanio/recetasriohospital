<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'paciente';
	protected $primaryKey = 'id';

	protected $fillable = [
		'cedula',
        'nombre',
        'slug',
        'edad',
        'telefono',
        'email',
        'direccion',
        'sexo_id',
        'users_id'
	];

     protected $hidden = [
       'id',
       'sexo_id',
       'users_id',
    ];
    
    /*   Relacion de uno a muchos inversa */
    public function sexo(){
        return $this->belongsTo(Sexo::class);
    }
    
    
    /* Relacion de uno a muchos */
    public function receta(){
        return $this->hasMany(Receta::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
