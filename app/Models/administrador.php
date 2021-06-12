<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class administrador extends Model
{
    use HasFactory;
    protected $table = 'administradors';
    protected $primarykey = 'id_administradors';

    public function datos()
    {
        return $this->belongsTo('App\Models\dato', 'id_datos', 'id_datos');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id', 'id');
    }
    protected $fillable = [
        'id_datos',
        'id',
    ];
}