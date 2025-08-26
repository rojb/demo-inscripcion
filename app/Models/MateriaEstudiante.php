<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriaEstudiante extends Model
{
    protected $table = 'materia_estudiante';
    protected $fillable = ['nota', 'creditos', 'materia_id', 'estudiante_id', 'grupo_id'];

    // Pertenece a una materia
    public function materia()
    {
        return $this->belongsTo(Materia::class, 'materia_id');
    }

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
