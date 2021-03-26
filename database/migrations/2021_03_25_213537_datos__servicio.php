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
        Schema::create ('Datos_Servicio', function(Blueprint $table){
            $table->integer('No_Registro')->notnull()->unique();
            $table->date('Fecha_Inicio');
            $table->date('Fecha_Termino');
            $table->date('Fecha_Inscripcion');
            $table->integer('Clave_Depen_DS');
            $table->integer('No_Boleta_DS');

            $table->primary('No_Registro');
            $table->foreign('Clave_Depen_DS')->references('Clave_Dependencia')->on('Datos_Dependencias')->onDelete('cascade');
            $table->foreign('No_Boleta_DS')->references('No_Boleta')->on('Alumno_Datos')->onDelete('cascade');
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
