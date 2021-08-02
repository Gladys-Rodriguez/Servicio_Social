<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitud_becas extends Model
{
    use HasFactory;
    protected $table = 'solicitud_becas';
    protected $primaryKey = 'id';
    public $timestamp = true;

    protected $fillable = [
        'id_alumnos',
        'id_expediente_becas',
        'validacion',
    ];
    public function alumnos()
    {
        return $this->hasOne('App\Models\alumno', 'id_alumnos', 'id_alumnos');
    }
    public function expedientes_becas()
    {
        return $this->hasOne('App\Models\Expediente_becas', 'id_expediente_becas','id_expediente_becas');
    }
}
