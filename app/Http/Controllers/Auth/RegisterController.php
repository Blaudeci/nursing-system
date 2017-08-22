<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    use RegistersUsers;

    //protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'                  => 'required|string|min:3|max:100',
            'cpf'                   => 'required|unique:users',
            'data-nasc'             => 'required|string',
            'email'                 => 'required|string|email|max:100|unique:users',
            'profile'               => 'required|string',
            'sexo'                  => 'required|string',
            'password'              => 'required|string|min:6|max:10|confirmed',
            'password_confirmation' => 'required|string|min:6|max:10',
            'status_user'           => 'required|string'
        ]);
    }

    protected function create(array $dataForm)
    {
        return User::create([
            'name'          => $dataForm['name'],
            'cpf'           => $dataForm['cpf'],
            'data-nasc'     => $dataForm['data-nasc'],
            'email'         => $dataForm['email'],
            'profile'       => $dataForm['profile'],
            'sexo'          => $dataForm['sexo'],
            'password'      => bcrypt($dataForm['password']),
            'status_user'   => $dataForm['status_user']
        ]);
    }
}