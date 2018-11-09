<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMinistrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ministras', function (Blueprint $table) {
        //    $table->increments('id_disciplina,id_curso,ano_semestre,matricula_professor');
            $table->timestamps();
            $table->integer('id_disciplina')->nullable();
            $table->integer('id_curso')->nullable();
            $table->string('ano_semestre')->nullable();
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
        Schema::drop('ministras');
    }
}
