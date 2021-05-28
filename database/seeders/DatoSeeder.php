<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\dato;

class DatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        dato::create([
            'nombre' => 'Moises',
            'ap_paterno' => 'Gonzalez',
            'ap_materno' => 'Hernandez',
            'telefono' => '5581729070',
            'celular' => '5581729070',
        ]);

        dato::create([
            'nombre' => 'Fernando',
            'ap_paterno' => 'Alejandre',
            'ap_materno' => 'Ojeda',
            'telefono' => '5549413810',
            'celular' => '5549413810',
        ]);


    }
}
