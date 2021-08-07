<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\VisitaEstado;

class VisitaEstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        VisitaEstado::create([
            'estado' => 'Solicitud sin Terminar'
        ]);
        
        VisitaEstado::create([
            'estado' => 'Sin Validar'
        ]);

        VisitaEstado::create([
            'estado' => 'Solicitud por Corregir'
        ]);

        VisitaEstado::create([
            'estado' => 'Solicitud Corregida'
        ]);

        VisitaEstado::create([
            'estado' => 'Aceptada'
        ]);

        VisitaEstado::create([
            'estado' => 'Rechazada'
        ]);

        VisitaEstado::create([
            'estado' => 'Finalizada'
        ]);
    }
}
