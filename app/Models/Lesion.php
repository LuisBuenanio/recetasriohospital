<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesion extends Model
{
    use HasFactory;
    protected $table = 'lesion';
    protected $primaryKey = 'id';

    protected $fillable = ['nombre'];
   

    public function formulario008s()
    {
        return $this->belongsToMany(Formulario008::class, 'lesion_formulario008')
                    ->withPivot('posicion_x', 'posicion_y');
    }
}
