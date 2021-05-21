<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'tipo_documentos';
    protected $primaryKey = 'id';
    public $timestamp = true;
}
