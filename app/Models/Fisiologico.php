<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class Fisiologico extends Model
{
	protected $fillable = [
		'paciente_id', 'outras_doencas', 'medicacao_continua', 'cirurgias_anteriores', 'internacoes', 'alergias', 'primeira_mestruacao', 'queixas', 'gesta', 'para', 'aborto'
	]; 

    public function pacientes(){
    	return $this->belongsTo(Paciente::class);
    }
}
