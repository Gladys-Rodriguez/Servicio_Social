<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'moises@hotmail.com',
            'password' => bcrypt('moises@hotmail.com'),
            'estado' => true,
            'id_rol' => '6',
        ]);

        User::create([
            'email' => 'fernando@gmail.com',
            'password' => bcrypt('fernando@gmail.com'),
            'estado' => true,
            'id_rol' => '6',
        ]);
    }
}
