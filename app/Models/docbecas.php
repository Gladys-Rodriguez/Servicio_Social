<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class docbecas extends Model
{
    use HasFactory;
    protected $table = 'docbecas';
    protected $primaryKey = 'id';
    public $timestamp = true;

    protected $fillable = [
        'ruta',
        'validacion',
        'observaciones',
        'solicitud_id',
        'nombre_doc',
        
    ];

    public function solicitud_becas()
    {
        return $this->belongsTo(solicitud_becas::class, 'solicitud_id', 'id');
    }
}