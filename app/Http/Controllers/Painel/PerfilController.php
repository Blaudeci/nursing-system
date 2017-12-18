<?php

namespace App\Http\Controllers\Painel;

use DB;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Users;

class PerfilController extends Controller
{
    private $user;

    public function __construct(Users $user)
    {
        $this->middleware('auth');
        $this->user = $user;
    }

    public function index()
    {
        $id = Auth()->user()->id;

        $user = $this->user->find($id);

        return view('painel.usuario.perfil', compact('user'));
    }

    public function store(Request $request)
    {
        $dataForm = $request->all();

        $users = $this->user->find(Auth()->user()->id);

        if($dataForm['name'] != "" && $dataForm['cpf'] != "" && $dataForm['data_nasc'] != "" && $dataForm['email'] != "" && $dataForm['sexo'] != ""){
            //Checks if all password fields are empty
            if($dataForm['password_old'] == "" && $dataForm['password_new'] == "" && $dataForm['password_new_confirm'] == ""){

                    $update = $users->update([
                        'name'          => $dataForm['name'],
                        'cpf'           => $dataForm['cpf'],
                        'data_nasc'     => $dataForm['data_nasc'],
                        'email'         => $dataForm['email'],
                        'profile'       => $dataForm['profile'],
                        'sexo'          => $dataForm['sexo'],
                        'password'      => $users->password
                    ]);

                    return redirect()->route('perfil.index')->with('message', 'Perfil editado com sucesso!');
            }else{
                if($dataForm['password_old'] != "" && $dataForm['password_new'] != "" && $dataForm['password_new_confirm'] != ""){
                    //Checks whether the old password (form) is the same as the old password (bank) and if the new password and the password confirmation are the same 
                    if(password_verify($dataForm['password_old'], $users->password) && $dataForm['password_new'] == $dataForm['password_new_confirm']){ 
                        

                        $update = $users->update([
                            'name'          => $dataForm['name'],
                            'cpf'           => $dataForm['cpf'],
                            'data_nasc'     => $dataForm['data_nasc'],
                            'email'         => $dataForm['email'],
                            'profile'       => $dataForm['profile'],
                            'sexo'          => $dataForm['sexo'],
                            'password'      => bcrypt($dataForm['password_new'])
                        ]);

                        return redirect()->route('perfil.index')->with('message', 'Perfil editado com sucesso!');
                    }else{
                        return redirect()->route('perfil.index')->withErrors(['errors' => 'A senha não corresponde!']);
                    }
                }else{
                    return redirect()->route('perfil.index')->withErrors(['errors' => 'Todos os campos de senhas devem ser preenchidos!']);
                }
            }
        }else{
            return redirect()->route('perfil.index')->withErrors(['errors' => 'Todos os campos devem ser preenchidos!']);
        }        
    }
}