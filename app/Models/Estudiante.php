<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    protected $fillable = ['registro', 'nombre', 'email', 'telefono'];

    // Un estudiante puede estar inscrito en muchas gestiones
    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'estudiante_id');
    }

    // Un estudiante puede cursar muchas materias
    public function materias()
    {
        return $this->belongsToMany(Materia::class, 'materia_estudiante')
            ->withPivot('nota', 'creditos', 'grupo_id')
            ->withTimestamps();
    }

    // Relación con grupos a través de materia_estudiante
    public function grupos()
    {
        return $this->belongsToMany(Grupo::class, 'materia_estudiante')
            ->withPivot('nota', 'creditos', 'materia_id')
            ->withTimestamps();
    }
}
