<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class Habito extends Model
{
    protected $fillable = [
		'paciente_id', 'sono_repouso', 'horas_sono', 'atividade_fisica', 'qtde_atividade_fisica', 'frutas_verduras', 'carne_vermelha', 'carne_branca', 'suco_habitos', 'agua_habitos', 'cha_habitos', 'outras_informacoes'
	]; 

    public function pacientes(){
    	return $this->belongsTo(Paciente::class);
    }
}
