<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocsBecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docs_becas', function (Blueprint $table) {
            $table->bigInteger('id_docs_becas')->unsigned()->notnull();
            $table->string('Nombre_doc');
            $table->string('file');
            $table->boolean('estado');
            $table->text('observaciones');
            $table->text('tipo_doc');

            $table->primary('id_docs_becas');
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
        Schema::dropIfExists('docs_becas');
    }
}
