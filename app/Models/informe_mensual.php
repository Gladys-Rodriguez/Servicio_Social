<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informe_mensual extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'usuario'    
    ];
}