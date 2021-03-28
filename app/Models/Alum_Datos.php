<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alum_Datos extends Model
{
    use HasFactory;
    protected $table = "Alumno_Datos";
    protected $primaryKey = 'No_Boleta';

    public function datos_servicio()
    {
        //$No_Boleta = Dato_Servicio::find($this->No_Boleta_DS);

        return $this->hasOne('App\Models\Dato_Servicio', 'No_Boleta_DS', 'No_Boleta');
    }


}
