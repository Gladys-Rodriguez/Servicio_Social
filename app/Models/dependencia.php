<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dependencia extends Model
{
    use HasFactory;

    protected $table = 'dependencias';
    protected $primarykey = 'id_dependencias';

    protected $fillable = [
        'nombre_depen',
        'nom_responsable',
        'ap_responsable',
        'am_responsable',
        'telefono',
        'email_responsable',
        'id_direcciones'
        ];

    //Relacion con la tabla de direcciones
    public function direcciones()
    {
        return $this->belongsTo('App\Models\direccion', 'id_direcciones', 'id_direccions');
    }
    //Relacion con la tabla de servicio
    public function servicio()
    {
        return $this->hasOne('App\Models\servicio', 'id_dependencias', 'id_dependencias');
    }
}
