<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcentradoPoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concentrado_poas', function (Blueprint $table) {
            $table->bigInteger('id_concentrados_poas')->unsigned()->notnull();
            $table->string('nombre');
            $table->unsignedBigInteger('usuario');

            $table->primary('id_concentrados_poas');
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
        Schema::dropIfExists('concentrado_poas');
    }
}
