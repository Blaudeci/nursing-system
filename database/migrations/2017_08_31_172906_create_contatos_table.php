<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatosTable extends Migration
{

    public function up()
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->string('nome_resp_one', 100);
            $table->string('parentesco_resp_one');
            $table->string('fone_resp_one', 20)->nullable();
            $table->string('cel_resp_one', 20);
            $table->string('nome_resp_two', 100)->nullable();
            $table->string('parentesco_resp_two')->nullable();
            $table->string('fone_resp_two', 20)->nullable();
            $table->string('cel_resp_two', 20)->nullable();
            $table->string('nome_resp_three', 100)->nullable();
            $table->string('parentesco_resp_three')->nullable();
            $table->string('fone_resp_three', 20)->nullable();
            $table->string('cel_resp_three', 20)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contatos');
    }
}
