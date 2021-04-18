<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class TodosSeeder extends Seeder
{
    /**phad
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $superadmin=User::create([
            'name' => 'superadmin Omar',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => '1',
            ]);
                    
        $adminservicio=User::create([
            'name' => 'admin Fernando',
            'email' => 'adminservicio@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => '2',
            ]);
        $adminbecas=User::create([
            'name' => 'admin Ivan',
            'email' => 'adminbecas@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => '3',
            ]);
        $adminpracticas=User::create([
                'name' => 'admin practicas',
                'email' => 'adminpracticas@gmail.com',
                'password' => Hash::make('admin'),
                'tipo' => '4',
                ]);
    }
}
