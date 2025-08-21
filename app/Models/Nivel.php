<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table = 'niveles';
    protected $fillable = ['nombre'];

    // Un nivel tiene muchas materias
    public function materias()
    {
        return $this->hasMany(Materia::class, 'nivel_id');
    }
}
