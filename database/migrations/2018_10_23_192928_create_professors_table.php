<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
        //    $table->increments('matricula_professor');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('matricula_professor')->nullable();
            $table->date('data_admissao')->nullable();
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
        Schema::drop('professors');
    }
}
