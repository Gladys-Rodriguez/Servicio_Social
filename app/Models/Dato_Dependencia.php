<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato_Dependencia extends Model
{
    use HasFactory;
    protected $table = "Datos_Dependencias";
    protected $primaryKey = 'Clave_Dependencia';

    public function datos_servicio()
    {
        //$No_Boleta = Dato_Servicio::find($this->No_Boleta_DS);

        return $this->hasOne('App\Models\Dato_Servicio', 'Clave_Depen_DS', 'Clave_Dependencia');
    }



    public function direccion()
    {
        return $this->belongsTo('App\Models\Direccion', 'Direc_Depen', 'Id_direccion');
    }

}

