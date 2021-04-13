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
            $table->id();
            $table->bigInteger('id_registros')->unsigned()->notnull();
            $table->bigInteger('id_liberaciones')->unsigned()->notnull();
            $table->bigInteger('id_doc_seguimientos')->unsigned()->notnull();
            $table->bigInteger('id_reportes')->unsigned()->notnull();
            $table->bigInteger('id_alumnos')->unsigned()->notnull();
            $table->timestamps();

            $table->foreign('id_registros')->references('id')->on('registros')->onDelete('cascade');
            $table->foreign('id_liberaciones')->references('id')->on('liberacions')->onDelete('cascade');
            $table->foreign('id_doc_seguimientos')->references('id')->on('doc_seguimientos')->onDelete('cascade');
            $table->foreign('id_reportes')->references('id')->on('reportes')->onDelete('cascade');
            $table->foreign('id_alumnos')->references('id')->on('alumnos')->onDelete('cascade');
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
