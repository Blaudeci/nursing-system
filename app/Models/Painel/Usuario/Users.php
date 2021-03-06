<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;
use App\Models\Ocorrencia;

class Users extends Model
{
    public function pacientes(){
        return $this->hasMany(Paciente::class);
    }

    public function ocorrencias(){
        return $this->hasMany(Ocorrencia::class);
    }
    
    protected $fillable = [
        'name', 'cpf', 'data_nasc', 'email', 'profile', 'sexo', 'password', 'status_user'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    //Validate user data create
    public $rules = [
	    'name'                              => 'required|string|min:3|max:100',
        'cpf'                               => 'required|unique:users',
        'data_nasc'                         => 'required|string',
        'email'                             => 'required|string|email|max:100|unique:users',
        'profile'                           => 'required|string',
        'sexo'                              => 'required|string',
        'password'                          => 'required|string|min:6|max:10|confirmed',
        'password_confirmation'             => 'required|string|min:6|max:10'
    ];

    public $messages = [
        'name.required'                     => 'O campo nome é obrigatório.',
        'name.min'                          => 'Nome deve ter no mínimo 3 caracteres.',
        'name.max'                          => 'Nome não deve ter mais que 100 caracteres.',
        'data_nasc.required'                => 'O campo data nascimento é obrigatório.',
        'profile.required'                  => 'O campo perfil é obrigatório.',
        'password.required'                 => 'O campo senha é obrigatório.',
        'password.min'                      => 'Senha deve ter no mínimo 6 caracteres.',
        'password.max'                      => 'Senha não deve ter mais que 10 caracteres.',
        'password.confirmed'                => 'A confirmação de senha não confere.',
        'password_confirmation.required'    => 'O campo confirmar senha é obrigatório.',
        'password_confirmation.min'         => 'Confirmar senha deve ter no mínimo 6 caracteres.',
        'password_confirmation.max'         => 'Confirmar senha não deve ter mais que 10 caracteres.',
        'password_confirm.required'         => 'O campo confirmar senha  é obrigatório.',
        'password_confirm.min'              => 'Confirmar senha deve ter no mínimo 6 caracteres.',
        'password_confirm.max'              => 'Confirmar senha não deve ter mais que 10 caracteres.',
        'password_old.min'                  => 'Senha antiga deve ter no mínimo 6 caracteres.',
        'password_old.max'                  => 'Senha antiga não deve ter mais que 10 caracteres.',
        'password_new.min'                  => 'Nova senha deve ter no mínimo 6 caracteres.',
        'password_new.max'                  => 'Nova senha não deve ter mais que 10 caracteres.',
        'password_new_confirm.min'          => 'Confirmar senha deve ter no mínimo 6 caracteres.',
        'password_new_confirm.max'          => 'Confirmar senha não deve ter mais que 10 caracteres.'
    ];
}