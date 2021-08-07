<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitaFormato extends Model
{
    use HasFactory;
    protected $table = 'visita_formatos';
    protected $primaryKey = 'id';
    public $timestamp = true;

    protected $fillable = [
        'nombre',
        'ruta',
        'tipo',
        'estado',
    ];
}
