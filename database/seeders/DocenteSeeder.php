<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\docente;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        docente::create([
            'academia' => 'informatica',
            'id_datos' => 1,
            'id' => 1,
        ]);

        docente::create([
            'academia' => 'informatica',
            'id_datos' => 2,
            'id' => 2,
        ]);
    }
}
