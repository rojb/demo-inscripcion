<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $table = 'modulos';
    protected $fillable = ['numero'];

    // Un módulo puede tener muchos horarios
    public function aulas()
    {
        return $this->hasMany(Aula::class, 'modulo_id');
    }
}
