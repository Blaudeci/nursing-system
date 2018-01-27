<?php
namespace App\Http\Controllers\Painel;

use Gate;
use DB;
use Auth;
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
    //--------------------------------------
    public function index()
    {
        //If user is not admin return to home
        if(Gate::allows('profile_tecnico'))
            return redirect('home');

        $users = $this->user->all();

        return view('painel.usuario.index', compact('users'));
    }
    //--------------------------------------
    public function create()
    {
        //If user is not admin return to home
        if(Gate::allows('profile_tecnico'))
            return redirect('home');

        return view('painel.usuario.create');
    }
    //--------------------------------------
    public function store(Request $request)
    {
        //If user is not admin return to home
        if(Gate::allows('profile_tecnico'))
            return redirect('home');

        $dataForm = $request->all();

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
            return redirect()->route('usuario.index')->with('message-register', 'Usuário cadastrado com sucesso!');
        else
            return redirect()->route('usuario.create');
    }
    //--------------------------------------
    public function edit($id)
    {
        //If user is not admin return to home
        if(Gate::allows('profile_tecnico'))
            return redirect('home');

        $user = $this->user->find($id);

        return view('painel.usuario.edit', compact('user'));
    }
    //--------------------------------------
    public function update(Request $request, $id)
    {
        //If user is not admin return to home
        if(Gate::allows('profile_tecnico'))
            return redirect('home');

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

        //Checks if all password fields are empty
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
                //Checks whether the old password (form) is the same as the old password (bank) and if the new password and the password confirmation are the same 
                if(password_verify($dataForm['password_old'], $user->password) && $dataForm['password_new'] == $dataForm['password_new_confirm']){ 
                    
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
                    return redirect()->route('usuario.edit', $id)->with(['errors_password' => 'A senha não corresponde!']);
                }
            }else{
                return redirect()->route('usuario.edit', $id)->with(['errors_password_all' => 'Todos os campos de senhas devem ser preenchidos!']);
            }
        }
    }
    //--------------------------------------
    public function status_inativado($id){

        //If user is not admin return to home
        if(Gate::allows('profile_tecnico'))
            return redirect('home');

        $user = $this->user->find($id);

        $update = $user->update([
            'status_user'    => 'inativo'
        ]);

        if($update){
            return redirect()->route('usuario.index', $id)->with('message-status-inativado', 'O usuário foi inativado com sucesso!');
        }else{
            return redirect()->route('usuario.index', $id)->withErrors(['errors' => 'Não foi possivel alterar o status do usuário!']);
        }
    }
    //--------------------------------------
    public function status_ativado($id){

        //If user is not admin return to home
        if(Gate::allows('profile_tecnico'))
            return redirect('home');

        $user = $this->user->find($id);

        $update = $user->update([
            'status_user'    => 'ativo'
        ]);

        if($update){
            return redirect()->route('usuario.index', $id)->with('message-status-ativado', 'O usuário foi ativado com sucesso!');
        }else{
            return redirect()->route('usuario.index', $id)->withErrors(['errors' => 'Não foi possivel alterar o status do usuário!']);
        }
    }
    //--------------------------------------
    public function destroy($id)
    {
        //If user is not admin return to home
        if(Gate::allows('profile_tecnico'))
            return redirect('home');

        $user = $this->user->find($id);

        if($user->profile == "Admin"){ //admin_master
            return redirect()->route('usuario.index')->withErrors(['errors' => 'Usuário não pode ser deletado!']);
        }else{
            $pacientes  = DB::table('pacientes')->where('user_id','=',$id)->first();

            $ocorrencia = DB::table('ocorrencias')->where('user_id','=',$id)->first();
            
            //If the user is linked to the patient tables and occurrences -> inactive user
            if($pacientes != null || $ocorrencia != null){
                if($user->status_user == "ativo"){
                    $update = $user->update([
                        'status_user'    => 'inativo'
                    ]);

                    return redirect()->route('usuario.index', $id)->with('message-no-delete', 'Usuário não pode ser deletado, pois está vinculado com outras tabelas!'); 
                }else{
                    return redirect()->route('usuario.index', $id)->with('message-no-delete', 'Usuário não pode ser deletado, pois está vinculado com outras tabelas!'); 
                }
            }else{

                $delete = $user->delete();

                if($delete)
                    return redirect()->route('usuario.index')->with('message-delete', 'Usuário deletado com sucesso!');
                else
                    return redirect()->route('usuario.index')->withErrors(['errors' => 'Falha ao deletar usuário!']);
            }
        }
    }
}