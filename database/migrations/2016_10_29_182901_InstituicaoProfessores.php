<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InstituicaoProfessores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituicao_professores', function(Blueprint $table){
            $table->increments('InstituicaoProfessores_ID');
            $table->integer('Instituicao_ID')->unsigned();
            $table->integer('Professor_ID')->unsigned();
            $table->foreign('Instituicao_ID')->references('Instituicao_ID')->on('instituicoes')->onUpdate('cascade');
            $table->foreign('Professor_ID')->references('Professor_ID')->on('professores')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('instituicao_professores', function(Blueprint $table){
            $table->dropForeign('instituicao_professores_professor_id_foreign');
            $table->dropForeign('instituicao_professores_instituicao_id_foreign');
        });

        Schema::dropIfExists('instituicao_professores');
    }
}
