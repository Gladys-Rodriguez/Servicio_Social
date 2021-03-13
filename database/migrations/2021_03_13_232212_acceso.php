<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Acceso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Acceso', function(Blueprint $table){
            $table->integer('No_Registro')->unique();
            $table -> integer('No_Boleta')->unique();

            $table ->foreign('No_Registro')-> references('No_Registro')->on('Datos_Servicio');
            $table->foreign('No_Boleta')->references('No_Boleta')->on('Datos_Personales');
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
        Schema::dropIfExists('Acceso');
    }
}
