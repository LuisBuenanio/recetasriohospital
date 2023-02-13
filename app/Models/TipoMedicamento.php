<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMedicamento extends Model
{
    use HasFactory;
    protected $table = 'tipo_medicamento';
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
    public function medicamento(){
        return $this->hasMany(Medicamento::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }



}
