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

   
    // Relación con los formularios para los diagnósticos presuntivos
    public function formulariosPresuntivos()
    {
        return $this->belongsToMany(Formulario008::class, 'diagnosticoscie10_formulario008', 'diagnosticoscie10_id', 'formulario008_id');
    }

    // Relación con los formularios para los diagnósticos definitivos
    public function formulariosDefinitivos()
    {
        return $this->belongsToMany(Formulario008::class, 'diagnosticoscie10f_formulario008', 'diagnosticoscie10_id', 'formulario008_id');
    }

    public function getNombreCompletoAttribute()
    {
        return "{$this->descripcion} ({$this->clave})";
    }

    public function getRouteKeyName()
    {
        return 'descripcion';
    }
}
