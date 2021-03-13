<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatosPersonales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Datos_Personales', function(Blueprint $table){
            $table->integer('No_Boleta')->unique()->nullable()->default(10);
            $table -> string ('Ap_Paterno');
            $table -> string ('Ap_Materno');
            $table -> string ('Nombre');
            $table -> string ('Carrera');
            $table -> string ('Semestre');
            $table -> string ('Turno');
            $table -> string ('Grupo');
            $table -> string ('E-mail') -> unique();
            $table -> string ('Telefono_Casa') -> unique();
            $table -> string ('Telefono_Celular') -> unique();
            $table -> timestamps();

            $table ->primary('No_Boleta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('Datos_Personales');
    }
}
