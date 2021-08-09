<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutotial extends Model
{
    protected $table = "tutorials";
    use HasFactory;
    protected $fillable = [
        'url',
        'estado',
        'nombre_tuto'
        ];}
