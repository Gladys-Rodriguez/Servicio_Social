<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class concetrado_liberacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'user'    
    ];
}
