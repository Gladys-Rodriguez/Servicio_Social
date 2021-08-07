<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitaEstado extends Model
{
    use HasFactory;
    protected $table = 'visita_estados';
    protected $primaryKey = 'id';
    public $timestamp = true;

    public function visitas()
    {
        return $this->hasMany(Visita::class, 'visita_estado_id', 'id');
    }
}
