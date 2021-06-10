<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultaAdminPra extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'email',
        'password',
        'id_rol',
        'estado',

    ];
}
