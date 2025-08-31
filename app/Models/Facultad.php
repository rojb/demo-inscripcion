<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    protected $table = 'facultades';
    protected $fillable = ['nombre', 'abreviacion'];

    // Una facultad tiene muchas carreras
    public function carreras()
    {
        return $this->hasMany(Carrera::class, 'facultad_id');
    }
}
