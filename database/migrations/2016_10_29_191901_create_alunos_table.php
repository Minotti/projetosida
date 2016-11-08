<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('Aluno_ID');
            $table->integer('User_ID', false, true);
            $table->foreign('User_ID')->references('id')->on('users');
            $table->integer('Instituicao_ID', false, true);
            $table->foreign('Instituicao_ID')->references('Instituicao_ID')->on('instituicoes');
            
            $table->string('Aluno_Nome');
            $table->string('Aluno_Matricula');
            $table->char('Aluno_CPF', 11);
            $table->char('Aluno_RG', 9);
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
        Schema::table('alunos', function(Blueprint $table){
            $table->dropForeign('alunos_user_id_foreign');
            $table->dropForeign('alunos_instituicao_id_foreign');
        });

        Schema::dropIfExists('alunos');
    }
}
