<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_expedientes', function (Blueprint $table) {
            $table->bigInteger('id_doc_expedientes')->unsigned()->notnull();
            $table->string('nombre_doc');
            $table->string('file');
            $table->boolean('estado');
            $table->text('observaciones');
            $table->bigInteger('id_alumnos')->unsigned()->notnull();
            $table->text('tipo_doc');
            $table->timestamps();

            $table->primary('id_doc_expedientes');
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
        Schema::dropIfExists('doc_expedientes');
    }
}
