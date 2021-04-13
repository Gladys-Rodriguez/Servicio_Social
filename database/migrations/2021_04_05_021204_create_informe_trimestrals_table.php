<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformeTrimestralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_trimestrals', function (Blueprint $table) {
            $table->bigInteger('id_informe_trimestrals')->unsigned()->notnull();
            $table->string('nombre');
            $table->unsignedBigInteger('usuario');
            $table->primary('id_informe_trimestrals');
            $table->foreign('usuario')->references('id_usuarios')->on('usuarios')->onDelete('cascade');
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
        Schema::dropIfExists('informe_trimestrals');
    }
}