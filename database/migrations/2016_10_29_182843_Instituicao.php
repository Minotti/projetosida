<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Instituicao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituicoes', function(Blueprint $table){
            $table->increments('Instituicao_ID');
            $table->string('Instituicao_Nome');
            $table->char('Instituicao_CNPJ', 14);
            $table->string('Instituicao_Endereco');
            $table->string('Instituicao_Numero');
            $table->string('Instituicao_Bairro');
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
        Schema::dropIfExists('instituicoes');
    }
}
