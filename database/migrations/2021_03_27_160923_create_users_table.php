<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index()->default('Prueba');
            $table->string('email')->index();
            $table->string('password')->index();
            //$table->string('rol')->nullable();
            //$table->string('tipo')->nullable();
            $table->bigInteger('rol')->nullable()->default('1');
            $table->timestamps();

            //$table->foreign('rol')->references('id')->on('rols')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
