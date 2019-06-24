<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{

    public function up()
    {
        Schema::create('alumnos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('edad');
            $table->string('direccion');
            $table->date('fecha_nacimiento');
            // Constraints declaration
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('alumnos');
    }
}
