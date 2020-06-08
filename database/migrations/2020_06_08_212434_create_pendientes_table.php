<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendientes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('introduccion')->nullable();
            $table->text('titulo')->nullable();
            $table->text('contenido')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->string('seccion')->nullable();
            $table->integer('autor_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendientes');
    }
}
