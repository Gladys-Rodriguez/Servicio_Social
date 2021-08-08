<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministradorsTable extends Migration
{
    public function up()
    {
        Schema::create('administradors', function (Blueprint $table) {
            $table->increments('id_administradors')->unsigned()->notnull();
            $table->unsignedInteger('id_datos')->unsigned()->notnull();
            $table->bigInteger('id')->unsigned()->notnull();
            $table->timestamps();

            $table->foreign('id_datos')->references('id_datos')->on('datos')->onDelete('cascade');
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('administradors');
    }
}
