<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        //$this->call(RolSeeder::class);
        //$this->call(UserSeeder::class);
        //$this->call(DatoSeeder::class);
        //$this->call(DocenteSeeder::class);
        $this->call(CarreraSeeder::class);
        //$this->call(DireccionSeeder::class);
        //$this->call(EmpresaSeeder::class);
        $this->call(GrupoSeeder::class);
        //$this->call(VisitaSeeder::class);
        $this->call(TipoDocumentoSeeder::class);
        //$this->call(VisitaDocumentoSeeder::class);
        //$this->call(GrupoVisitaSeeder::class);
    
    }
}
