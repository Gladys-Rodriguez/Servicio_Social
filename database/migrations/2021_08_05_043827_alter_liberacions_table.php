<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterLiberacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('liberacions', function (Blueprint $table) {
            //
            $table->string('estado')->nullable()->change();
            $table->date('fecha_envio')->nullable()->change();
            $table->text('observaciones')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('liberacions', function (Blueprint $table) {
            //
            $table->string('estado')->change();
            $table->date('fecha_envio')->change();
            $table->text('observaciones')->change();
        });
    }
}
