<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente_Becas extends Model
{
    use HasFactory;
    protected $table = 'expediente_becas';
    protected $primaryKey = 'id_expediente_becas';
    public $timestamp = true;
}
