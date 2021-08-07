<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;
    protected $table = 'carreras';
    protected $primaryKey = 'id';
    public $timestamp = true;

    protected $fillable = [
        'nombre',
        'estado',
    ];

    public function grupos()
    {
        return $this->hasMany(Grupo::class, 'carrera_id', 'id');
    }
}
