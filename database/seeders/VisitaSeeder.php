<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Visita;

class VisitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visita::create([
            'docente_id' => 1,
            'empresa_id' => 1,
            'fecha_visita' => date('2021-06-21'),
            'validacion' => false,
        ]);

        Visita::create([
            'docente_id' => 2,
            'empresa_id' => 2,
            'fecha_visita' => date('2021-06-10'),
            'validacion' => false,
        ]);

    }
}
