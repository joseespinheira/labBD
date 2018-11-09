<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
        //    $table->increments('matricula_aluno');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('matricula_aluno')->nullable();
            $table->integer('id_curso')->nullable();
            $table->integer('matricula_pessoa')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alunos');
    }
}
