<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteTable extends Migration
{
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('cpf', 14);
            $table->string('data_nasc', 10);
            $table->string('condicao_moradia');
            $table->string('email', 100);
            $table->string('perfil');
            $table->string('sexo', 10);
            $table->string('religiao');
            $table->string('estado_civil');
            $table->string('endereco');
            $table->string('numero_casa');
            $table->string('cep', 10);
            $table->string('uf', 2);
            $table->string('nome_curso', 100);
            $table->string('semestre_curso');
            $table->string('periodo_curso');
            $table->string('moradia_estudantil');
            $table->string('nome_resp_one', 100);
            $table->string('parentesco_resp_one');
            $table->string('fone_resp_one');
            $table->string('cel_resp_one');
            $table->string('nome_resp_two');
            $table->string('parentesco_resp_two');
            $table->string('fone_resp_two');
            $table->string('cel_resp_two');
            $table->string('nome_resp_three');
            $table->string('parentesco_resp_three');
            $table->string('fone_resp_three');
            $table->string('cel_resp_theree');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
