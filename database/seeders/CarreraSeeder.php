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
        ]);

        Carrera::create([
            'nombre' => 'Técnico en Administración de Empresas Turísticas',
        ]);
        
        Carrera::create([
            'nombre' => 'Técnico en Contaduría',
        ]);

        Carrera::create([
            'nombre' => 'Técnico en Informática',
        ]);

        Carrera::create([
            'nombre' => 'Técnico en Gestión de la Ciberseguridad',
        ]);

        Carrera::create([
            'nombre' => 'Tronco Común',
        ]);
    }
}
