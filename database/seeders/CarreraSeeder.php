<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Carrera;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carrera::create([
            'nombre' => 'Técnico en Administración',
            'estado' => 1,
        ]);

        Carrera::create([
            'nombre' => 'Técnico en Administración de Empresas Turísticas',
            'estado' => 1,
        ]);
        
        Carrera::create([
            'nombre' => 'Técnico en Contaduría',
            'estado' => 1,
        ]);

        Carrera::create([
            'nombre' => 'Técnico en Informática',
            'estado' => 1,
        ]);

        Carrera::create([
            'nombre' => 'Técnico en Gestión de la Ciberseguridad',
            'estado' => 1,
        ]);

        Carrera::create([
            'nombre' => 'Tronco Común',
            'estado' => 1,
        ]);
    }
}
