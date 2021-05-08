<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    use HasFactory;
    protected $table = 'alumnos';
    protected $primarykey = 'id_alumnos';

    //Relacion con la tabla direccions
    public function direcciones()
    {
        return $this->belongsTo('App\Models\direccion', 'id_direccions', 'id_direccions');


    }
    //Relacion con la tabla servicio
    public function servicio()
    {
        return $this->hasOne('App\Models\servicio', 'id_alumnos', 'id_alumnos');
    }

    //Relacion con la tabla de datos
    public function datos()
    {
        return $this->belongsTo('App\Models\dato', 'id_datos', 'id_datos');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario', 'id_usuarios', 'id');
    }



}
