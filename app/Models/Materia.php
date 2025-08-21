<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materias';
    protected $fillable = ['sigla', 'nombre', 'creditos', 'nivel_id', 'tipo_id', 'plan_estudio_id'];

    // Una materia pertenece a un plan de estudio
    public function planEstudio()
    {
        return $this->belongsTo(PlanEstudio::class, 'plan_estudio_id');
    }

    // Una materia pertenece a un nivel
    public function nivel()
    {
        return $this->belongsTo(Nivel::class, 'nivel_id');
    }

    // Una materia pertenece a un tipo
    public function tipo()
    {
        return $this->belongsTo(Tipo::class, 'tipo_id');
    }

    // Una materia tiene muchos prerequisitos (materias que son prerequisitos de esta)
    public function prerequisitos()
    {
        return $this->belongsToMany(Materia::class, 'prerequisitos', 'materia_id', 'prerequisito_id');
    }

    // Una materia es prerequisito de muchas materias
    public function esPrerequisitoDe()
    {
        return $this->belongsToMany(Materia::class, 'prerequisitos', 'prerequisito_id', 'materia_id');
    }
}
