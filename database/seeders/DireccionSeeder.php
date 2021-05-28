<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\direccion;

class DireccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        direccion::create([
            'ciudad' => 'CDMX',
            'alcaldia' => 'Venustiano Carranza',
            'colonia' => '10 de Mayo',
            'calle' => 'Emiliano Zapata',
            'num_ext' => '174',
            'num_int' => '',
            'cp' => 15290,
        ]);

        direccion::create([
            'ciudad' => 'CDMX',
            'alcaldia' => 'Miguel Hidalgo',
            'colonia' => 'Polanco',
            'calle' => 'Moliere',
            'num_ext' => '321',
            'num_int' => '',
            'cp' => 11550 ,
        ]);
    }
}
