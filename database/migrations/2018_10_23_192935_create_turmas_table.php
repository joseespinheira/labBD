<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
        //    $table->increments('id_disciplina,id_curso,ano_semestre');
            $table->timestamps();
            $table->integer('id_disciplina')->nullable();
            $table->integer('id_curso')->nullable();
            $table->string('ano_semestre')->nullable();
            $table->string('nome')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('turmas');
    }
}
