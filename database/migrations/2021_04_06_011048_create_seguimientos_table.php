<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->increments('id_seguimientos')->unsigned()->notnull();
            $table->unsignedInteger('id_registros')->unsigned()->notnull();
            $table->unsignedInteger('id_liberaciones')->unsigned()->notnull();
            $table->unsignedInteger('id_doc_seguimientos')->unsigned()->notnull();
            $table->unsignedInteger('id_reportes')->unsigned()->notnull();
            $table->unsignedInteger('id_alumnos')->unsigned()->notnull();
            $table->timestamps();


            $table->foreign('id_registros')->references('id_registros')->on('registros')->onDelete('cascade');
            $table->foreign('id_liberaciones')->references('id_liberacions')->on('liberacions')->onDelete('cascade');
            $table->foreign('id_doc_seguimientos')->references('id_doc_seguimientos')->on('doc_seguimientos')->onDelete('cascade');
            $table->foreign('id_reportes')->references('id_reportes')->on('reportes')->onDelete('cascade');
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
        Schema::dropIfExists('seguimientos');
    }
}
