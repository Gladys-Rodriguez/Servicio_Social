<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dato extends Model
{
    use HasFactory;
    protected $table = 'datos';
    protected $primarykey = 'id_datos';

    //Relacion con la tabla de alumno
    public function alumno()
    {
        return $this->hasOne('App\Models\alumno', 'id_datos', 'id_datos');
    }

    protected $fillable = [
        'nombre',
        'ap_paterno',
        'ap_materno',
        'telefono',
        'celular',

    ];
}
