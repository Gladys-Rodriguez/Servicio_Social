<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reporte extends Model
{ protected $table = "docs_reportes";
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
