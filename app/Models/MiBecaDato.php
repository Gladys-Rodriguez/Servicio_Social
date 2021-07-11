<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiBecaDato extends Model
{
    use HasFactory;
    protected $table =['datos'];
    protected $fillable = ['nombre', 'ap_paterno', 'ap_materno','email','telefono', 'celular'];
}
