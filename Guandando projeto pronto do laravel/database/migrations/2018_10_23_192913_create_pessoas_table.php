<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
        //    $table->increments('matricula_pessoa');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('matricula_pessoa')->nullable();
            $table->string('nome')->nullable();
            $table->char('sexo')->nullable();
            $table->index(['matricula_pessoa']);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pessoas');
    }
}
