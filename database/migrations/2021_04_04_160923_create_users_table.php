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
            /*$table->string('name')->index();*/
            $table->string('email')->index();
            $table->string('email_verified_at')->null();
            $table->string('password')->index();
            $table->bigInteger('id_rol')->unsigned()->notnull();
            $table->boolean('estado');
            $table->timestamps();


            $table->foreign('id_rol')->references('id_rol')->on('rols')->onDelete('cascade');

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
