<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class direccion extends Model
{
    use HasFactory;

    protected $table = 'direccions';
    protected $primarykey = 'id_direccions';

    protected $fillable = [
        'id_direccions',
        'ciudad',
        'alcaldia',
        'colonia',
        'calle',
        'num_ext',
        'num_int',
        'cp'
    ];

    public function dependencia()
    {
        return $this->hasOne('App\Models\dependencia', 'id_direcciones', 'id_direccions');
    }

    public function alumnos()
    {
        return $this->hasOne('App\Models\alumno', 'id_direccions', 'id_direccions');
    }

    public function empresa()
    {
        return $this->hasOne(Empresa::class,'direccion_id','id');
    }
}
