<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDisciplinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplinas', function (Blueprint $table) {
        //    $table->increments('id_disciplina');
            $table->timestamps();
            $table->integer('id_disciplina')->nullable();
            $table->string('nome')->nullable();
            $table->text('ementa')->nullable();
            $table->integer('matricula_professor')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('disciplinas');
    }
}
