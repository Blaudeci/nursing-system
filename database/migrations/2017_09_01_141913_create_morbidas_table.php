<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMorbidasTable extends Migration
{
    public function up()
    {
        Schema::create('morbidas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');

            //Doenças Pré-existentes
            $table->string('acidente_vascular')->nullable();
            $table->string('cancer')->nullable();
            $table->string('hipertensao')->nullable();
            $table->string('cardiopatia')->nullable();
            $table->string('diabetes')->nullable();
            $table->string('doenca_renal')->nullable();
            $table->string('pneumopatia')->nullable();
            $table->text('outros_pre_existentes')->nullable();

            //Transtornos Alergicos
            $table->string('drogas')->nullable();
            $table->string('alimentos')->nullable();
            $table->string('cosmeticos')->nullable();
            $table->string('esparadrapo')->nullable();
            $table->string('la_alergico')->nullable();
            $table->text('outros_alergicos')->nullable();

            //Fatores de Risco
            $table->string('tabagismo')->nullable();
            $table->string('etilismo')->nullable();
            $table->string('quimioterapia')->nullable();
            $table->string('radioterapia')->nullable();
            $table->string('dependencia_quimica')->nullable();
            $table->string('violencia')->nullable();
            $table->text('outros_fatores_riscos')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('morbidas');
    }
}
