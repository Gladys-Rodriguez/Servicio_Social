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
            'Tipo_rol' => 'Alumno',
        ]);

        Rol::create([
            'id_rol' => 2,
            'Tipo_rol' => 'Docente',
        ]);

    }
}
