<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('id_registros')->unsigned()->notnull();
            $table->string('status_ss')->nullable();
            $table->date('fecha_envio')->nullable();
            $table->text('observaciones')->nullable();
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
        Schema::dropIfExists('registros');
    }
}
