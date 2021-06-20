<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class docs_expedientePrueba extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_doc',
            'estado',
            'observaciones',
            'user',
        'nombre',
            'tipo_doc'
        ];
}
