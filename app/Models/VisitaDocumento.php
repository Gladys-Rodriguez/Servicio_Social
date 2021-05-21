<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitaDocumento extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'visita_documentos';
    protected $primaryKey = 'id';
    public $timestamp = true;
}
