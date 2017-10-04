<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
use App\Models\Paciente;

class Ocorrencia extends Model
{
	 public function user(){
        return $this->belongsTo(Users::class);
    }

     public function paciente(){
        return $this->belongsTo(Paciente::class);
    }

    protected $fillable = [
        'user_id', 'paciente_id', 'acompanhante', 'encaminhamento', 'conduta_enfermagem', 'consulta_anterior', 'tipo_queixa', 'motivo_consulta', 'peso', 'altura', 'valor_imc', 'imc', 'perimetro_abdominal', 'pressao_arterial', 'temperatura', 'frequencia_cardiaca', 'frequencia_respiratoria', 'glicemia', 'estagio_tanner', 'diagnostico_enfermagem', 'prescricao_enfermagem', 'evolucao_enfermagem', 'anotacao_enfermagem', 'created_at', 'updated_at'
    ];
}