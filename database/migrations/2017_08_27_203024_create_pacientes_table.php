<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nome',              100)->nullable();
            $table->string('data_nasc',          10)->nullable();
            $table->string('condicao_moradia',   20)->nullable();
            $table->string('sexo',               20)->nullable();
            $table->string('email',             100)->nullable();
            $table->string('perfil',             20)->nullable();
            $table->string('religiao',           30)->nullable();
            $table->string('estado_civil',       20)->nullable();
            $table->string('endereco',          100)->nullable();
            $table->string('numero_casa',          )->nullable();
            $table->string('cep',                10)->nullable();
            $table->string('uf',                  2)->nullable();
            $table->string('nome_curso',        100)->nullable();
            $table->string('semestre_curso',     10)->nullable();
            $table->string('periodo_curso',      20)->nullable();
            $table->string('moradia_estudantil', 20)->nullable();
            $table->string('status',             10)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}