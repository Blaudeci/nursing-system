<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class Contato extends Model
{
    protected $fillable = [
    	'paciente_id', 
    	'nome_resp_one', 'parentesco_resp_one', 'fone_resp_one', 'cel_resp_one',
    	'nome_resp_two', 'parentesco_resp_two', 'fone_resp_two', 'cel_resp_two', 
        'nome_resp_three', 'parentesco_resp_three', 'fone_resp_three', 'cel_resp_three',
        'created_at', 'updated_at'
    ];

    public function paciente(){
    	return $this->belongsTo(Paciente::class);
    }
}