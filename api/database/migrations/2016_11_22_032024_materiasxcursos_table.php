<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MateriasxcursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('materiasxcursos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_curso')->unsigned();
            $table->integer('cod_materia')->unsigned();
            $table->timestamps();
            $table->foreign('cod_curso')->references('id')->on('cursos');
            $table->foreign('cod_materia')->references('id')->on('materias');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('materiasxcursos');
    }
}
