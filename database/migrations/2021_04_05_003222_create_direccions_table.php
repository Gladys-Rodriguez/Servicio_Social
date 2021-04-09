<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccions', function (Blueprint $table) {
            $table->id();
            $table->string('alcaldia',30)->notnull();
            $table->string('colonia',30)->notnull();
            $table->string('calle',30)->notnull();
            $table->string('num_ext',30)->notnull();
            $table->string('num_int',30)->nullable();
            $table->integer('cp')->notnull();
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
        Schema::dropIfExists('direccions');
    }
}
