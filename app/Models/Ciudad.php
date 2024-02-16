<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;
    protected $table = 'ciudades';
	protected $primaryKey = 'id';

    protected $fillable = [
		'descripcion',
	];

    protected $hidden = [
        'id',
    ];

    public $timestamps = false;

    public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }

    
    /* Relacion de uno a muchos */
    public function paciente(){
        return $this->hasMany(Paciente::class);
    }

    public function getRouteKeyName()
    {
        return 'descripcion';
    }
}
