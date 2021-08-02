<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocbecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docbecas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->longText('ruta')->notnull();
            $table->boolean('validacion')->default(false);
            $table->text('observaciones')->nullable();
            $table->unsignedBigInteger('solicitud_id')->index('solicitud_id');
            $table->string('nombre_doc');
            $table->timestamps();

            $table->foreign('solicitud_id')->references('id')->on('solicitud_becas')->onDelete('cascade');
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docbecas');
    }
}
