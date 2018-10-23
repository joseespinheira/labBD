<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProvasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provas', function (Blueprint $table) {
        //    $table->increments('id_disciplina,id_curso,ano_semestre,matricula_aluno,descricao');
            $table->timestamps();
            $table->integer('id_disciplina')->nullable();
            $table->integer('id_curso')->nullable();
            $table->string('ano_semestre')->nullable();
            $table->integer('matricula_aluno')->nullable();
            $table->string('descricao')->nullable();
            $table->integer('nota')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('provas');
    }
}
