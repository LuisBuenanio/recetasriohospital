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
		'nacionalidad',
        'ced',
        'cedula',
        'apellido_paterno',
        'apellido_materno',
        'nombre',
        'fecha_nacimiento',
        'edad',
        'telefono',
        'email',
        'direccion',
        'ocupacion',  
        'estado_civil', 
        'instruccion',     
        'sexo_id',
        'provincia_id',
        'ciudad_id',
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

     /* /* Relacion de uno a muchos */
    public function formulario008(){
        return $this->hasMany(Formulario008::class);
    } 

    public function getNombreCompletoAttribute()
    {
        $apellidoPaterno = $this->apellido_paterno ? $this->apellido_paterno : '';
        $apellidoMaterno = $this->apellido_materno ? "{$this->apellido_materno}" : '';
        $nombre = $this->nombre;
    
        return "{$nombre} {$apellidoPaterno} {$apellidoMaterno} ";
    }

    public function getNombreCompletoCedula1Attribute()
    {
        $NombreCompleto = $this->nombre_completo;
        $cedula = $this->cedula ? "{$this->cedula}" : '';
        // Concatenar la cédula al nombre completo
        $nombreCompletoCedula = "{$NombreCompleto} - {$this->cedula}";

        return $nombreCompletoCedula;
    }
    public function getNombreCompletoCedulaAttribute()
    {
        $NombreCompleto = $this->nombre_completo;
        $cedula = $this->cedula ? "{$this->cedula}" : '';
        // Concatenar la cédula al nombre completo
        $nombreCompletoCedula = "{$this->cedula} {$NombreCompleto}  ";

        return $nombreCompletoCedula;
    }

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }

    public function getRouteKeyName()
    {
        return 'nombre';
    }
}
