<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcorrenciasTable extends Migration
{
    
    public function up()
    {
        Schema::create('ocorrencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->string("acompanhante"           )->nullable();
            $table->string("encaminhamento"         )->nullable();
            $table->string("conduta_enfermagem"     )->nullable();
            $table->text("consulta_anterior"        )->nullable();
            $table->string("tipo_queixa"            )->nullable();
            $table->text("motivo_consulta"          )->nullable();
            $table->string("peso"                   )->nullable();
            $table->string("altura"                 )->nullable();
            $table->string("valor_imc"              )->nullable();
            $table->string("imc"                    )->nullable();
            $table->string("perimetro_abdominal"    )->nullable();
            $table->string("pressao_arterial"       )->nullable();
            $table->string("temperatura"            )->nullable();
            $table->string("frequencia_cardiaca"    )->nullable();
            $table->string("frequencia_respiratoria")->nullable();
            $table->string("glicemia"               )->nullable();
            $table->string("estagio_tanner"         )->nullable();
            $table->text("diagnostico_enfermagem"   )->nullable();
            $table->text("prescricao_enfermagem"    )->nullable();
            $table->text("evolucao_enfermagem"      )->nullable();
            $table->text("anotacao_enfermagem"      )->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ocorrencias');
    }
}