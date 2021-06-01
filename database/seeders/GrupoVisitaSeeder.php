<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\GrupoVisita;

class GrupoVisitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GrupoVisita::create([
            'grupo_id' => 1,
            'visita_id' => 1,
            'cantidad_alumnos' => 40, 
        ]);

        GrupoVisita::create([
            'grupo_id' => 2,
            'visita_id' => 1,
            'cantidad_alumnos' => 40, 
        ]);

        GrupoVisita::create([
            'grupo_id' => 3,
            'visita_id' => 2,
            'cantidad_alumnos' => 40, 
        ]);
    }
}
