<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanEstudio extends Model
{
	protected $table = 'planes_estudio';
	protected $fillable = ['codigo', 'cantidad_semestres', 'vigente', 'carrera_id'];

	// Un plan de estudio pertenece a una carrera
	public function carrera()
	{
		return $this->belongsTo(Carrera::class, 'carrera_id');
	}

	// Un plan de estudio tiene muchas materias
	public function materias()
	{
		return $this->hasMany(Materia::class, 'plan_estudio_id');
	}
}
