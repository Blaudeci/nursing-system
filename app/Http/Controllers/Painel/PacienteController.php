<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Users;
use App\Models\Paciente;
use App\Models\Contato;
use App\Models\Fisiologico;
use App\Models\Morbida;
use App\Models\Habito;

class PacienteController extends Controller
{
    private $pacient;

    public function __construct(Paciente $pacient)
    {
        $this->middleware('auth');
        $this->pacient = $pacient;
    }
    
    public function index()
    {
        $pacientes = $this->pacient->all(); 
        return view('painel.paciente.index', compact('pacientes'));
    }

    //-----------------------Pronto-------------------------
    public function create()
    {
        return view('painel.paciente.create');
    }

    
    public function store(Request $request)
    {

        $dataForm = $request->all();
        $id = Auth()->user()->id;
        
        $paciente = Paciente::create([
            'user_id'               => $id,
            'nome'                  => $dataForm['nome'],
            'data_nasc'             => $dataForm['data_nasc'],
            'condicao_moradia'      => $dataForm['condicao_moradia'],
            'sexo'                  => $dataForm['sexo'],
            'email'                 => $dataForm['email'],
            'perfil'                => $dataForm['perfil'],
            'religiao'              => $dataForm['religiao'],
            'estado_civil'          => $dataForm['estado_civil'],
            'endereco'              => $dataForm['endereco'],
            'numero_casa'           => $dataForm['numero_casa'],
            'cep'                   => $dataForm['cep'],
            'uf'                    => $dataForm['uf'],
            'nome_curso'            => $dataForm['nome_curso'],
            'semestre_curso'        => $dataForm['semestre_curso'],
            'periodo_curso'         => $dataForm['periodo_curso'],
            'moradia_estudantil'    => $dataForm['moradia_estudantil'],
            'status'                => 'ativo'
        ]);

        $contato = Contato::create([
            'paciente_id'           => $paciente->id,
            'nome_resp_one'         => $dataForm['nome_resp_one'],
            'parentesco_resp_one'   => $dataForm['parentesco_resp_one'],
            'fone_resp_one'         => $dataForm['fone_resp_one'],
            'cel_resp_one'          => $dataForm['cel_resp_one'],
            'nome_resp_two'         => $dataForm['nome_resp_two'],
            'parentesco_resp_two'   => $dataForm['parentesco_resp_two'],
            'fone_resp_two'         => $dataForm['fone_resp_two'],
            'cel_resp_two'          => $dataForm['cel_resp_two'],
            'nome_resp_three'       => $dataForm['nome_resp_three'],
            'parentesco_resp_three' => $dataForm['parentesco_resp_three'],
            'fone_resp_three'       => $dataForm['fone_resp_three'],
            'cel_resp_three'        => $dataForm['cel_resp_three']
        ]);

        $fisiologico = Fisiologico::create([
            'paciente_id'           => $paciente->id,
            'outras_doencas'        => $dataForm['outras_doencas'],
            'medicacao_continua'    => $dataForm['uso_medicacao'],
            'cirurgias_anteriores'  => $dataForm['cirurgias_anteriores'],
            'internacoes'           => $dataForm['internacoes'],
            'alergias'              => $dataForm['alergias'],
            'primeira_mestruacao'   => $dataForm['primeira_mestruacao'],
            'queixas'               => $dataForm['queixas'],
            'gesta'                 => $dataForm['gesta'],
            'para'                  => $dataForm['para'],
            'aborto'                => $dataForm['aborto']
        ]);

        $morbida = Morbida::create([
            'paciente_id'           => $paciente->id,
            'acidente_vascular'     => $dataForm['acidente_vascular'],
            'cancer'                => $dataForm['cancer'],
            'hipertensao'           => $dataForm['hipertensao'],
            'cardiopatia'           => $dataForm['cardiopatia'],
            'diabetes'              => $dataForm['diabetes'],
            'doenca_renal'          => $dataForm['doenca_renal'],
            'pneumopatia'           => $dataForm['pneumopatia'],
            'outros_pre_existentes' => $dataForm['outros_pre_existentes'],

            //Transtornos Alergicos
            'drogas'                => $dataForm['drogas'],
            'alimentos'             => $dataForm['alimentos'],
            'cosmeticos'            => $dataForm['cosmeticos'],
            'esparadrapo'           => $dataForm['esparadrapo'],
            'la_alergico'           => $dataForm['la_alergico'],
            'outros_alergicos'      => $dataForm['outros_alergicos'],

            //Fatores de Risco
            'tabagismo'             => $dataForm['tabagismo'],
            'etilismo'              => $dataForm['etilismo'],
            'quimioterapia'         => $dataForm['quimioterapia'],
            'radioterapia'          => $dataForm['radioterapia'],
            'dependencia_quimica'   => $dataForm['dependencia_quimica'],
            'violencia'             => $dataForm['violencia'],
            'outros_fatores_riscos' => $dataForm['outros_fatores_riscos']
        ]);

        $habito = Habito::create([
            'paciente_id'           => $paciente->id,
            'sono_repouso'          => $dataForm['sono_repouso'],
            'horas_sono'            => $dataForm['horas_sono'],
            'atividade_fisica'      => $dataForm['atividade_fisica'],
            'qtde_atividade_fisica' => $dataForm['qtde_atividade_fisica'],
            'frutas_verduras'       => $dataForm['frutas_verduras'],
            'carne_vermelha'        => $dataForm['carne_vermelha'],
            'carne_branca'          => $dataForm['carne_branca'],
            'suco_habitos'          => $dataForm['suco_habitos'],
            'agua_habitos'          => $dataForm['agua_habitos'],
            'cha_habitos'           => $dataForm['cha_habitos'],
            'outras_informacoes'    => $dataForm['outras_informacoes']
        ]);

        if($paciente && $contato && $fisiologico && $morbida && $habito)
            return redirect()->route('paciente.create')->with('message', 'Usuário cadastrado com sucesso!');
        else
            return redirect()->route('paciente.create');
    }

   
    public function show($id)
    {
        $pacient        = $this->pacient->find($id);
        $contact        = $pacient->contato;
        $fisiologico    = $pacient->fisiologico;
        $morbida        = $pacient->morbida;
        $habito         = $pacient->habito;

        return view('painel.paciente.show', compact('pacient', 'contact', 'fisiologico', 'morbida', 'habito'));
    }

    
    public function edit($id)
    {
        $pacient        = $this->pacient->find($id);
        $contact        = $pacient->contato;
        $fisiologico    = $pacient->fisiologico;
        $morbida        = $pacient->morbida;
        $habito         = $pacient->habito;

        return view('painel.paciente.edit', compact('pacient', 'contact', 'fisiologico', 'morbida', 'habito'));
    }



    public function update(Request $request, $id)
    {
        //
    }





    public function status_inativado($id){
        $pacient = $this->pacient->find($id);

        $update = $pacient->update([
            'status'    => 'inativo'
        ]);

        if($update){

            return redirect()->route('paciente.index', $id)->with('message-status-inativado', 'O usuário foi Inativado com sucesso!');
        }else{
            return redirect()->route('paciente.index', $id)->withErrors(['errors' => 'Não foi possivel alterar o status do usuário!']);
        }
    }




    public function status_ativado($id){
        $pacient = $this->pacient->find($id);

        $update = $pacient->update([
            'status'    => 'ativo'
        ]);

        if($update){

            return redirect()->route('paciente.index', $id)->with('message-status-ativado', 'O usuário foi ativado com sucesso!');
        }else{
            return redirect()->route('paciente.index', $id)->withErrors(['errors' => 'Não foi possivel alterar o status do usuário!']);
        }
    }

    
    

   
    public function destroy($id)
    {
        $pacient = $this->pacient->find($id);

        $delete = $pacient->delete();

        if($delete)
            return redirect()->route('paciente.index')->with('message-delete', 'Paciente deletado com sucesso!');
        else
            return redirect()->route('paciente.index')->withErrors(['errors' => 'Falha ao deletar paciente!']);
    }
}