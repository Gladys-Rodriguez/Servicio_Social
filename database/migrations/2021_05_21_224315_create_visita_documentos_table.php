<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitaDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visita_documentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('visita_id')->index('visita_id');
            $table->unsignedBigInteger('tipo_documento_id')->index('tipo_documento_id');
            $table->longText('ruta')->notnull();
            $table->boolean('validacion')->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();

            $table->foreign('visita_id')->references('id')->on('visitas')->onDelete('cascade');
            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visita_documentos');
    }
}
