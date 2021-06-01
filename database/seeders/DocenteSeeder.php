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
            'dato_id' => 1,
            'user_id' => 1,
        ]);

        docente::create([
            'academia' => 'informatica',
            'dato_id' => 2,
            'user_id' => 2,
        ]);
    }
}
