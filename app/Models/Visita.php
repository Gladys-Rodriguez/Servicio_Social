<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    use HasFactory;

    protected $table = 'visitas';
    protected $primaryKey = 'id';
    public $timestamp = true;

    protected $fillable = [
        'docente_id',
        'empresa_id',
        'fecha_visita',
        'visita_estado_id',
        'observaciones',
    ];

    public function docente()
    {
        return $this->belongsTo(Docente::class, 'docente_id', 'id');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id', 'id');
    }

    public function visita_estado()
    {
        return $this->belongsTo(VisitaEstado::class, 'visita_estado_id', 'id');
    }

    public function visita_documentos()
    {
        return $this->hasMany(VisitaDocumento::class, 'visita_id', 'id');
    }

    public function grupos()
    {
        return $this->belongsToMany(Grupo::class, 'grupos_visitas', 'visita_id', 'grupo_id')->withTimestamps();
    }
}
