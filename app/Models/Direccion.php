<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;
    protected $table = "Direcciones";

    public function datos_dependencia()
    {

        return $this->belongsTo('App\Models\Dato_Dependencia', 'Direc_Depen', 'Id_direccion');
    }
}
