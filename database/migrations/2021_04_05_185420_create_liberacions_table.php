<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiberacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liberacions', function (Blueprint $table) {
            $table->increments('id_liberacions')->unsigned()->notnull();
            $table->string('estado');
            $table->date('fecha_envio');
            $table->text('observaciones');
            $table->unsignedInteger('id_alumnos')->unsigned()->notnull();
            $table->unsignedInteger('id_servicios')->unsigned()->notnull();
            $table->timestamps();


            $table->foreign('id_alumnos')->references('id_alumnos')->on('alumnos')->onDelete('cascade');
            $table->foreign('id_servicios')->references('id_servicios')->on('servicios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liberacions');
    }
}
