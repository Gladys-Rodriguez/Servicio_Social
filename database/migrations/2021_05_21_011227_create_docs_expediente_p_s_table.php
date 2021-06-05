<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocsExpedientePSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docs_expediente_p_s', function (Blueprint $table) {
            $table->increments('id_doc_expedientesP')->unsigned()->notnull();
            $table->string('nombre_doc');
            $table->boolean('estado');
            $table->text('observaciones');
            $table->unsignedBigInteger('user');
            $table->unsignedBigInteger('name');

            $table->text('tipo_doc');
            
        
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('name')->references('name')->on('users')->onDelete('cascade');


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
        Schema::dropIfExists('docs_expediente_p_s');
    }
}
