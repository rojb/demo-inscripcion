<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipos';
    protected $fillable = ['nombre'];

    // Un tipo tiene muchas materias
    public function materias()
    {
        return $this->hasMany(Materia::class, 'tipo_id');
    }
}
