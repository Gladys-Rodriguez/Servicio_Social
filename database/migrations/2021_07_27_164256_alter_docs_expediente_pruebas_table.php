<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterDocsExpedientePruebasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('docs_expediente_pruebas', function (Blueprint $table) {
            //
            $table->boolean('carga')->default(0)->after('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('docs_expediente_pruebas', function (Blueprint $table) {
            //
            $table->dropColumn('carga');
        });
    }
}
