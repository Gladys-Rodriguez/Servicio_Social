<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $table = 'docentes';
    protected $primaryKey = 'id';
    public $timestamp = true;

    public function dato()
    {
        return $this->belongsTo(dato::class,'dato_id','id_datos');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function visitas()
    {
        return $this->hasMany(Visita::class, 'docente_id', 'id');
    }
}
