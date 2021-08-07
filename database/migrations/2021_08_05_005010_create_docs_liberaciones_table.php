<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocsLiberacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docs_liberaciones', function (Blueprint $table) {
            $table->increments('id')->unsigned()->notnull();
            $table->string('nombre_doc');
            $table->boolean('estado')->default(0);
            $table->text('observaciones')->nullable();
            $table->unsignedBigInteger('user')->nullable();
            $table->text('tipo_doc')->nullable();
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('docs_liberaciones');
    }
}
