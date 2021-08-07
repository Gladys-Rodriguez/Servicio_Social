<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Grupo;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupo::create([
            'secuencia' => '3AM40',
            'carrera_id' => 1, 
            'estado' => 1,
        ]);

        Grupo::create([
            'secuencia' => '4NV40',
            'carrera_id' => 4, 
            'estado' => 1,
        ]);

        Grupo::create([
            'secuencia' => '5CV40',
            'carrera_id' => 3, 
            'estado' => 1,
        ]);
    }
}
