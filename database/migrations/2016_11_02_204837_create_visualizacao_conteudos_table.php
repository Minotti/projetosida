<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisualizacaoConteudosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visualizacao_conteudos', function (Blueprint $table) {
            $table->increments('Visualizacao_ID');
            $table->integer('Conteudo_ID')->unsigned();
            $table->foreign('Conteudo_ID')->references('Conteudo_ID')->on('conteudos');
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
        Schema::table('visualizacao_conteudos', function(Blueprint $table){
            $table->dropForeign('visualizacao_conteudos_conteudo_id_foreign');
            $table->dropIfExists('visualizacao_conteudos');
        });
    }
}
