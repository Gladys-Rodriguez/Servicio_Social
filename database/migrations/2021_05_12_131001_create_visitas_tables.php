<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitasTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function(Blueprint $table){
            $table->increments('id_empresa')->unsigned()->notnull();
            $table->string('nombre',40)->notnull();
            $table->unsignedInteger('id_direccions')->notnull()->index();
            $table->timestamps();

            $table->foreign('id_direccions')->references('id_direccions')->on('direccions')->onDelete('cascade');
        });


        Schema::create('solicitudesVisitas', function (Blueprint $table){
            $table->increments('id_solicitud')->unsigned()->notnull();
            $table->unsignedInteger('id_docentes')->index('id_docentes')->notnull();
            $table->unsignedInteger('id_empresa')->index('id_empresa')->notnull();
            $table->dateTime('fechaVisita')->nullable();
            $table->boolean('validacion')->nullable();
            $table->timestamps();

            
           $table->foreign('id_docentes')->references('id_docentes')->on('docentes')->onDelete('cascade');
           $table->foreign('id_empresa')->references('id_empresa')->on('empresas')->onDelete('cascade');
        });

        Schema::create('carreras', function (Blueprint $table) {
            $table->increments('id_carrera')->unsigned()->notnull();
            $table->string('nombre',80)->notnull();
            $table->timestamps();
        });

        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id_grupo')->unsigned()->notnull();
            $table->char('grupo', 5)->notnull()->unique();
            $table->unsignedInteger('id_carrera')->index('id_carrera')->notnull();
            $table->timestamps();

            $table->foreign('id_carrera')->references('id_carrera')->on('carreras')->onDelete('cascade');
        });

        Schema::create('solicitudesVisitas_grupos', function (Blueprint $table) {
            $table->increments('id')->unsigned()->notnull();
            $table->unsignedInteger('id_solicitud')->index('id_solicitud')->notnull();
            $table->unsignedInteger('id_grupo')->index('id_grupo')->notnull();
            $table->smallInteger('cantidadAlumnos')->nullable();
            $table->timestamps();

            $table->foreign('id_solicitud')->references('id_solicitud')->on('solicitudesVisitas')->onDelete('cascade');
            $table->foreign('id_grupo')->references('id_grupo')->on('grupos')->onDelete('cascade');

        });

        Schema::create('tipoDocumentos', function (Blueprint $table) {
            $table->increments('id_tipoDocumento')->unsigned()->notnull();
            $table->string('nombre', 100)->notnull();
            $table->timestamps();
        });

        Schema::create('documentosVisitas', function (Blueprint $table) {
            $table->increments('id_documentoVisita')->unsigned()->notnull();
            $table->unsignedInteger('id_solicitud')->index('id_solicitud')->notnull();
            $table->unsignedInteger('id_tipoDocumento')->index('id_tipoDocumento')->notnull();
            $table->longText('rutaDoumento')->notnull();
            $table->boolean('validacion')->nullable();
            $table->text('comentarios')->nullable();

            $table->timestamps();

            $table->foreign('id_solicitud')->references('id_solicitud')->on('solicitudesVisitas')->onDelete('cascade');
            $table->foreign('id_tipoDocumento')->references('id_tipoDocumento')->on('tipoDocumentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentosVisitas');
        Schema::dropIfExists('tipoDocumentos');
        Schema::dropIfExists('solicitudesVisitas_grupos');
        Schema::dropIfExists('solicitudesVisitas');
        Schema::dropIfExists('empresas');
        Schema::dropIfExists('grupos');
        Schema::dropIfExists('carreras');
    }
}
