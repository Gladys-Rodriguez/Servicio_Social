<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'email_verified_at',
        'password',
        'id_rol',
        'estado',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function alumnos()
    {
        return $this->hasOne('App\Models\alumno', 'id_usuarios', 'id');
    }
    public function administradors()
    {
        return $this->hasOne('App\Models\administrador', 'id', 'id');
    }

    //Relación Uno a Uno

    /**Prueba de roles
    public function role(){
        return $this->belongsTo('App\Role');
    }


    public function esAdmin(){

        if($this->role->nombre_rol=='administrador'){
            return true;
        }

        return false;
    } */


}
