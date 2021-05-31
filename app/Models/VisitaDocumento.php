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


    public function tipo_documento()
    {
        return $this->belongsTo(tipoDocumento::class, 'tipo_documento_id', 'id');
    }
    
    public function visita()
    {
        return $this->belongsTo(Visita::class, 'visita_id', 'id');
    }
}
