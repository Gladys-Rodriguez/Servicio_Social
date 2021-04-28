<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigInteger('id_alumnos')->unsigned()->notnull();
            $table->string('carrera',40)->notnull();
            $table->char('semestre',1)->notnull();
            $table->char('grupo', 5)->notnull();
            $table->string('turno', 10)->notnull();
            $table->bigInteger('id_datos')->unsigned()->notnull();
            $table->bigInteger('id_usuarios')->unsigned()->notnull();

            $table->timestamps();
            $table->primary('id_alumnos');


            $table->foreign('id_datos')->references('id_datos')->on('datos')->onDelete('cascade');
            $table->foreign('id_usuarios')->references('id_usuarios')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
