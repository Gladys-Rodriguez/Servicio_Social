<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->increments('id_reportes')->unsigned()->notnull();
            $table->string('nombre_doc');
            $table->string('file');
            $table->date('Fecha_reporte');
            $table->boolean('estado');
            $table->text('observaciones');
            $table->unsignedInteger('id_alumnos')->unsigned()->notnull();
            $table->text('tipo_doc');
            $table->timestamps();


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
        Schema::dropIfExists('reportes');
    }
}
