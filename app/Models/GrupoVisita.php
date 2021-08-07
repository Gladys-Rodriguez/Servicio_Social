<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoVisita extends Model
{
    use HasFactory;
    protected $table = 'grupos_visitas';
    protected $primaryKey = 'id';
    public $timestamp = true;

    protected $fillable = [
        'visita_id',
        'grupo_id',
        'cantidad_alumnos',
    ];

    public function grupo()
    {
        return $this->belongsTo(grupo::class, 'grupo_id', 'id');
    }
}
