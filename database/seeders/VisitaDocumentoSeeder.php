<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\VisitaDocumento;

class VisitaDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VisitaDocumento::create([
            'visita_id' => 1,
            'tipo_documento_id' => 1,
            'ruta' => '',
            'validacion' => false,
            'observaciones' => '',
        ]);

        VisitaDocumento::create([
            'visita_id' => 2,
            'tipo_documento_id' => 1,
            'ruta' => '',
            'validacion' => false,
            'observaciones' => '',
        ]);
    }
}
