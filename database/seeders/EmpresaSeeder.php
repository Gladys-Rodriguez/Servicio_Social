<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Empresa;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::create([
            'nombre' => 'Bimbo',
            'direccion_id' => 1,
        ]);

        Empresa::create([
            'nombre' => 'Marinela',
            'direccion_id' => 2,
        ]);
    }
}
