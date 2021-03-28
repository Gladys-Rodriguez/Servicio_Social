<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato_Servicio extends Model
{
    use HasFactory;
    protected $table = "Datos_Servicio";
    protected $primaryKey = 'No_Registro';
    protected $foreignKey = 'No_Boleta_DS';
    //protected $foreignKey = 'Clave_Depen_DS';


public function alumn_datos()
{
        return $this->belongsTo('App\Models\Alum_Datos', 'No_Boleta_DS', 'No_Boleta');
}

public function dato_dependencia()
{
        return $this->belongsTo('App\Models\Dato_Dependencia', 'Clave_Depen_DS', 'Clave_Dependencia');
}

}
