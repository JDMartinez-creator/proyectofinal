<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modificaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->text('introduccion')->nullable();
            $table->text('titulo')->nullable();
            $table->text('contenido')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->string('seccion')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('contenido_id')->nulleable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modificaciones');
    }
}
