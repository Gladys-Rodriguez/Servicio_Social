<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'id_rol' => 1,
            'Tipo_rol' => 'Laravel',
        ]);

        Rol::create([
            'id_rol' => 2,
            'Tipo_rol' => 'Admnistrador de Servcio',
        ]);

        Rol::create([
            'id_rol' => 3,
            'Tipo_rol' => 'Admnistrador de Becas',
        ]);

        Rol::create([
            'id_rol' => 4,
            'Tipo_rol' => 'Admnistrador de Practicas',
        ]);

        Rol::create([
            'id_rol' => 5,
            'Tipo_rol' => 'Alumno',
        ]);

        Rol::create([
            'id_rol' => 6,
            'Tipo_rol' => 'Docente',
        ]);   

        Rol::create([
            'id_rol' => 7,
            'Tipo_rol' => 'Admin Master',
        ]);   
    }
}
