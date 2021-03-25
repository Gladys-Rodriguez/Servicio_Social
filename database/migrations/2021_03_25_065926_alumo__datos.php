<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlumoDatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Alumno_Datos', function(Blueprint $table){
            $table->integer('No_Boleta')->notnull();
            $table->string('Nombre', 30);
            $table->string('Ap_Paterno', 30);
            $table->string('Ap_Materno', 30);
            $table->string('Carrera', 20);
            $table->char('Semestre', 1);
            $table->string('Grupo', 5);
            $table->char('Turno',1);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();

            $table->primary('No_Boleta');
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
        Schema::dropIfExists('Alumno_Datos');
    }
}
