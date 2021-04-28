<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedienteBecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expediente_becas', function (Blueprint $table) {
            $table->bigInteger('id_expediente_becas')->unsigned()->notnull();
            $table->string('Nombre_beca');
            $table->date('Fecha_Inicio');
            $table->date('Fecha_Fin');
            $table->bigInteger('monto');
            $table->bigInteger('id_alumnos')->unsigned()->notnull();
            $table->bigInteger('id_docs_becas')->unsigned()->notnull();

            $table->primary('id_expediente_becas');
            $table->foreign('id_alumnos')->references('id_alumnos')->on('alumnos')->onDelete('cascade');
            $table->foreign('Id_docs_becas')->references('id_docs_becas')->on('docs_becas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expediente_becas');
    }
}
