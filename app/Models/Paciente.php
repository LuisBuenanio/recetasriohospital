<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'paciente';
	protected $primaryKey = 'id';

	protected $fillable = [
		'cedula',
        'nombre',
        'fecha_nacimiento',
        'edad',
        'telefono',
        'email',
        'direccion',
        'sexo_id'
	];

     protected $hidden = [
       'id',
       'sexo_id'
    ];

    public function setFechaNacimientoAttribute($value)
    {
        $this->attributes['fecha_nacimiento'] = $value;
        $this->attributes['edad'] = Carbon::parse($value)->age;
    }
    
    /*   Relacion de uno a muchos inversa */
    public function sexo(){
        return $this->belongsTo(Sexo::class);
    }
    
    
    /* /* Relacion de uno a muchos 
    public function receta(){
        return $this->hasMany(Receta::class);
    } */

    public function getRouteKeyName()
    {
        return 'nombre';
    }
}
