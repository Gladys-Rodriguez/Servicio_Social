<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    use HasFactory;

    protected $table = 'servicios';
    protected $primarykey = 'id_servicios';
    //Relacion con la tabla de alumnos
    public function alumnos()
    {
        return $this->belongsTo('App\Models\alumno', 'id_alumnos', 'id_alumnos');
    }
    //Relacion con la tabla de dependencias
    public function dependencias()
    {
        return $this->belongsTo('App\Models\dependencia', 'id_dependencias', 'id_dependencias');
    }
}
