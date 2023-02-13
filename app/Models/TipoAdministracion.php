<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAdministracion extends Model
{
    use HasFactory;
    protected $table = 'tipo_administracion';
	protected $primaryKey = 'id';

    protected $fillable = [
		'descripcion',
        'slug',
	];

    protected $hidden = [
        'id',
    ];

    public $timestamps = false;

    /* Relacion de uno a muchos */
    public function administracion(){
        return $this->hasMany(Administracion::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
