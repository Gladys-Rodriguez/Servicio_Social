<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formatos extends Model
{
    protected $table = "formatos";
    use HasFactory;
    protected $fillable = [
        'nombre_doc',
        'observaciones',
        'tipo_doc'
        ];
}
