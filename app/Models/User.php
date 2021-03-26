<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;




class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    //Relación Uno a Uno
    public function alumn_datos()
    {
        return $this->hasOne('App\Models\Alum_Datos', 'No_Boleta_DS', 'No_Boleta');
    }

    public function dato_dependencia()
    {
        return $this->hasOne('App\Models\Dato_Dependencia', 'Clave_Depen_DS', 'Clave_Dependencia');
    }

    public function direccion()
    {
        return $this->hasOne('App\Models\Direccion', 'Direc_Depen', 'Id_direccion');
    }

}
