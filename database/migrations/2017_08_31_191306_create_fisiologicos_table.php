<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFisiologicosTable extends Migration
{
    public function up()
    {
        Schema::create('fisiologicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->text('outras_doencas',       1000)->nullable();
            $table->text('medicacao_continua',   1000)->nullable();
            $table->text('cirurgias_anteriores', 1000)->nullable();
            $table->text('internacoes',          1000)->nullable();
            $table->text('alergias',             1000)->nullable();
            $table->text('primeira_mestruacao',  1000)->nullable();
            $table->text('queixas',              1000)->nullable();
            $table->string('gesta',                30)->nullable();
            $table->string('para',                 30)->nullable();
            $table->string('aborto',               30)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fisiologicos');
    }
}