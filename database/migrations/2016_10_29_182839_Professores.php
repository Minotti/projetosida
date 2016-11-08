<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Professores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->increments('Professor_ID');
            $table->integer('User_ID')->unsigned();
            $table->foreign('User_ID')->references('id')->on('users')->onUpdate('cascade');
            $table->string('Professor_Nome');
            $table->char('Professor_CPF', 11);
            $table->char('Professor_RG', 9);
            $table->string('Professor_Email', 90);
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
        Schema::table('professores', function(Blueprint $table){
            $table->dropForeign('professores_user_id_foreign');
        });

        Schema::dropIfExists('professores');
    }
}
