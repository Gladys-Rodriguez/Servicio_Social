<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresas';
    protected $primaryKey = 'id';
    public $timestamp = true;


    public function direccion()
    {
        return $this->belongsTo(direccion::class, 'direccion_id', 'id_direccions');
    }


    public function visitas()
    {
        return $this->hasMany(Visita::class, 'empresa_id', 'id');
    }
}
