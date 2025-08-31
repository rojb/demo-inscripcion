<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrupoEstudiante extends Model
{
    protected $table = 'grupo_estudiante';
    protected $fillable = ['nota', 'creditos', 'estudiante_id', 'grupo_id'];

    // Pertenece a un estudiante
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'estudiante_id');
    }

    // Pertenece a un grupo
    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'grupo_id');
    }
}
