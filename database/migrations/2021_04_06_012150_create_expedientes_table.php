<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedientes', function (Blueprint $table) {
            $table->increments('id_expedientes')->unsigned()->notnull();
            $table->unsignedInteger('id_cartas_compromisos')->unsigned()->notnull();
            $table->unsignedInteger('id_doc_expedientes')->unsigned()->notnull();
            $table->unsignedInteger('id_alumnos')->unsigned()->notnull();
            $table->timestamps();


            $table->foreign('id_cartas_compromisos')->references('id_cartas_compromisos')->on('cartas_compromisos')->onDelete('cascade');
            $table->foreign('id_doc_expedientes')->references('id_doc_expedientes')->on('doc_expedientes')->onDelete('cascade');
            $table->foreign('id_alumnos')->references('id_alumnos')->on('alumnos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expedientes');
    }
}
