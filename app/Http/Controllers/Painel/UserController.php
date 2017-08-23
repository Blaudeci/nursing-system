<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Users;

class UserController extends Controller
{
    private $user;

    public function __construct(Users $user)
    {
        $this->middleware('auth');
        $this->user = $user;
    }
    
    public function index()
    {
        $users = $this->user->all(); 
        return view('painel.usuario.index', compact('users'));
    }

    public function create()
    {
        return view('painel.usuario.create');
    }

    public function store(Request $request)
    {
        $dataForm = $request->all();

        //Valida os dados
        $validate = validator($dataForm, $this->user->rules, $this->user->messages);
        if($validate->fails()){
            return redirect()
                        ->route('usuario.create')
                        ->withErrors($validate)
                        ->withInput();
        }

        $insert = Users::create([
            'name'          => $dataForm['name'],
            'cpf'           => $dataForm['cpf'],
            'data_nasc'     => $dataForm['data_nasc'],
            'email'         => $dataForm['email'],
            'profile'       => $dataForm['profile'],
            'sexo'          => $dataForm['sexo'],
            'password'      => bcrypt($dataForm['password']),
            'status_user'   => "ativo"
        ]);

        if($insert)
            return redirect()->route('usuario.create')->with('message', 'Usuário cadastrado com sucesso!');
        else
            return redirect()->route('usuario.create');
    }
    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = $this->user->find($id);

        return view('painel.usuario.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {

        $dataForm = $request->all();

        $user = $this->user->find($id);

        $rules_edit = [
            'name'                  => 'required|string|min:3|max:100',
            'cpf'                   => 'required|unique:users,cpf,'.$id,
            'data_nasc'             => 'required|string',
            'email'                 => 'required|string|email|max:100|unique:users,email,'.$id,
            'profile'               => 'required|string',
            'sexo'                  => 'required|string',
        ];

        $rules_edit_password = [
            'name'                  => 'required|string|min:3|max:100',
            'cpf'                   => 'required|unique:users,cpf,'.$id,
            'data_nasc'             => 'required|string',
            'email'                 => 'required|string|email|max:100|unique:users,email,'.$id,
            'profile'               => 'required|string',
            'sexo'                  => 'required|string',
            'password_old'          => 'min:6|max:10',
            'password_new'          => 'min:6|max:10',
            'password_new_confirm'  => 'min:6|max:10'
        
        ];


        //Verifica se se todos os campos da senha estão vazios
        if($dataForm['password_old'] == "" && $dataForm['password_new'] == "" && $dataForm['password_new_confirm'] == ""){

                //Valida os dados
                $validate = validator($dataForm, $rules_edit, $this->user->messages);
                if($validate->fails()){
                    return redirect()
                        ->route('usuario.edit', $id)
                        ->withErrors($validate)
                        ->withInput();
                }

                $update = $user->update([
                    'name'          => $dataForm['name'],
                    'cpf'           => $dataForm['cpf'],
                    'data_nasc'     => $dataForm['data_nasc'],
                    'email'         => $dataForm['email'],
                    'profile'       => $dataForm['profile'],
                    'sexo'          => $dataForm['sexo'],
                    'password'      => $user->password,
                ]);

                return redirect()->route('usuario.edit', $id)->with('message', 'Usuário editado com sucesso!');
        }else{
            if($dataForm['password_old'] != "" && $dataForm['password_new'] != "" && $dataForm['password_new_confirm'] != ""){
                //Verifica se a senha antiga(form) esta igual a senha antiga(banco) e se as senha nova e a confirmação da senha estão iguais 
                if(password_verify($dataForm['password_old'], $user->password) && $dataForm['password_new'] == $dataForm['password_new_confirm']){ 
                    
                    //Valida os dados
                    $validate = validator($dataForm, $rules_edit_password, $this->user->messages);
                    if($validate->fails()){
                       return redirect()
                            ->route('usuario.edit', $id)
                            ->withErrors($validate)
                            ->withInput();
                    }

                    $update = $user->update([
                        'name'          => $dataForm['name'],
                        'cpf'           => $dataForm['cpf'],
                        'data_nasc'     => $dataForm['data_nasc'],
                        'email'         => $dataForm['email'],
                        'profile'       => $dataForm['profile'],
                        'sexo'          => $dataForm['sexo'],
                        'password'      => bcrypt($dataForm['password_new']),
                    ]);

                    return redirect()->route('usuario.edit', $id)->with('message', 'Usuário editado com sucesso!');
                }else{
                    return redirect()->route('usuario.edit', $id)->withErrors(['errors' => 'A senha não corresponde!']);
                }
            }else{
                return redirect()->route('usuario.edit', $id)->withErrors(['errors' => 'Todos os campos de senhas devem ser preenchidos!']);
            }
        }
    }

    public function destroy($id)
    {
        $user = $this->user->find($id);

        $delete = $user->delete();

        if($delete)
            return redirect()->route('usuario.index')->with('message', 'Usuário deletado com sucesso!');
        else
            return redirect()->route('usuario.index')->withErrors(['errors' => 'Falha ao deletar usuário!']);

    }
}