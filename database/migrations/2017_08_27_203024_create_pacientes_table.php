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
            $table->string('nome', 100);
            $table->string('data_nasc', 10);
            $table->string('condicao_moradia', 20);
            $table->string('sexo', 20);
            $table->string('email', 100)->nullable();
            $table->string('perfil', 20);
            $table->string('religiao', 30);
            $table->string('estado_civil', 20);
            $table->string('endereco',100);
            $table->string('numero_casa');
            $table->string('cep', 10);
            $table->string('uf', 2);
            $table->string('nome_curso', 100)->nullable();
            $table->string('semestre_curso')->nullable();
            $table->string('periodo_curso', 20)->nullable();
            $table->string('moradia_estudantil', 20)->nullable();
            $table->string('status', 10);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}