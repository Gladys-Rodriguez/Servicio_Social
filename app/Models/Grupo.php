<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $table = 'grupos';
    protected $primaryKey = 'id';
    public $timestamp = true;


    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'carrera_id', 'id' );
    }

    public function visitas()
    {
        return $this->belongsToMany(Visita::class, 'grupos_visitas', 'grupo_id', 'visita_id')->withTimestamps();
    }
}
