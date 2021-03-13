<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatosServicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Datos_Servicio', function(Blueprint $table){
            $table->integer('No_Registro')->unique();
            $table -> integer('Boleta_DPersonales')->unique();
            $table -> string ('Dependencia');
            $table -> date ('Fecha_Inicio');
            $table -> date ('Fecha_Termino');
            $table -> date ('Fecha_Inscripcion');

            $table -> timestamps();

            $table ->primary('No_Registro');
            $table->foreign('Boleta_DPersonales')->references('No_Boleta')->on('Datos_Personales');
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
        Schema::dropIfExists('Datos_Servicio');
    }
}
