<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class docs_liberaciones extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_doc',
            'estado',
            'carga',
            'observaciones',
            'user',
        'nombre',
            'tipo_doc'
        ];
}
