<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
use App\Models\Contato;
use App\Models\Fisiologico;
use App\Models\Morbida;
use App\Models\Habito;
use App\Models\Ocorrencia;

class Paciente extends Model
{
	protected $fillable = [
        'user_id', 'nome', 'data_nasc', 'condicao_moradia', 'sexo', 'email', 'perfil',  'religiao', 'estado_civil', 'endereco', 'numero_casa', 'cep', 'uf', 'nome_curso', 'semestre_curso', 'periodo_curso', 'moradia_estudantil', 'status', 'created_at', 'updated_at'
    ];

    public function user(){
        return $this->belongsTo(Users::class);
    }

    public function contato(){
        return $this->hasOne(Contato::class);
    }

    public function fisiologico(){
        return $this->hasOne(Fisiologico::class);
    }

    public function morbida(){
        return $this->hasOne(Morbida::class);
    }

    public function habito(){
        return $this->hasOne(Habito::class);
    }

    public function ocorrencias(){
        return $this->hasMany(Ocorrencia::class);
    }
}