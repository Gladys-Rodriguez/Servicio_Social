<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\dato;
use App\Models\administrador;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'email' => 'saececyt13@gmail.com',
            'password' =>  bcrypt('ctentavu14'),
            'id_rol' => 7,
            'estado' => 1,
        ]);

        DB::table('datos')->insert([
            'id_datos' => '1',
            'nombre' => 'administrador Master',
            'ap_paterno' => 'flores',
            'ap_materno' =>  'magon',
            'telefono' =>'11111111',
            'celular' => '22222222',
        ]);

        DB::table('administradors')->insert([
            'id_datos' => '1',
            'id'=> '1',
        ]);

    }
}
