<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatosDependencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create ('Datos_Dependencias', function(Blueprint $table){
            $table->integer('Clave_Dependencia')->notnull();
            $table->string('Nombre_Dependencia', 30);
            $table->string('Nom_Responsable', 30);
            $table->string('Ap_Responsable', 30);
            $table->string('Am_Responsable', 30);
            $table->string('Telefono', 30);
            $table->string('email')->unique();
            $table->integer('Direc_Depen');

            $table->primary('Clave_Dependencia');
            $table->foreign('Direc_Depen')->references('Id_direccion')->on('Direcciones')->onDelete('cascade');


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
        Schema::dropIfExists('Datos_Dependencias');
    }
}
