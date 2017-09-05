<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class Morbida extends Model
{
    protected $fillable = [
		'paciente_id', 'acidente_vascular', 'cancer', 'hipertensao', 'cardiopatia', 'diabetes', 'doenca_renal', 'pneumopatia', 'outros_pre_existentes', 'drogas', 'alimentos', 'cosmeticos', 'esparadrapo', 'la_alergico', 'outros_alergicos', 'tabagismo', 'etilismo', 'quimioterapia', 'radioterapia', 'dependencia_quimica', 'violencia', 'outros_fatores_riscos'
	]; 

    public function pacientes(){
    	return $this->belongsTo(Paciente::class);
    }
}
