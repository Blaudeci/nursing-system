<?php

namespace App\Http\Controllers\Painel;

use Gate;
use DB;
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
    private $patient;

    public function __construct(Paciente $patient)
    {
        $this->middleware('auth');
        $this->patient = $patient;
    }
    //--------------------------------------
    public function index()
    {
        $pacientes = $this->patient->all(); 
        return view('painel.paciente.index', compact('pacientes'));
    }
    //--------------------------------------
    public function create()
    {
        return view('painel.paciente.create');
    }
    //--------------------------------------
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
            'medicacao_continua'    => $dataForm['medicacao_continua'],
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
            return redirect()->route('paciente.index')->with('message', 'Paciente cadastrado com sucesso!');
        else
            return redirect()->route('paciente.create')->withErrors(['errors' => 'Problema ao cadastrar paciente!']);
    }
    //--------------------------------------
    public function show($id)
    {
        $paciente       = $this->patient->find($id);
        $contato        = $paciente->contato;
        $fisiologico    = $paciente->fisiologico;
        $morbida        = $paciente->morbida;
        $habito         = $paciente->habito;

        return view('painel.paciente.show', compact('paciente', 'contato', 'fisiologico', 'morbida', 'habito'));
    }
    //--------------------------------------
    public function edit($id)
    {
        $paciente       = $this->patient->find($id);
        $contato        = $paciente->contato;
        $fisiologico    = $paciente->fisiologico;
        $morbida        = $paciente->morbida;
        $habito         = $paciente->habito;

        return view('painel.paciente.edit', compact('paciente', 'contato', 'fisiologico', 'morbida', 'habito'));
    }
    //--------------------------------------
    public function update(Request $request, $id)
    {
        $dataForm = $request->all();

        $pacientes       = $this->patient->find($id);
        $contatos        = $pacientes->contato;
        $fisiologicos    = $pacientes->fisiologico;
        $morbidas        = $pacientes->morbida;
        $habitos         = $pacientes->habito;

        $paciente = $pacientes->update([
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
        ]);

        $contato = $contatos->update([
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

        $fisiologico = $fisiologicos->update([
            'outras_doencas'        => $dataForm['outras_doencas'],
            'medicacao_continua'    => $dataForm['medicacao_continua'],
            'cirurgias_anteriores'  => $dataForm['cirurgias_anteriores'],
            'internacoes'           => $dataForm['internacoes'],
            'alergias'              => $dataForm['alergias'],
            'primeira_mestruacao'   => $dataForm['primeira_mestruacao'],
            'queixas'               => $dataForm['queixas'],
            'gesta'                 => $dataForm['gesta'],
            'para'                  => $dataForm['para'],
            'aborto'                => $dataForm['aborto']
        ]);

        $morbida = $morbidas->update([
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

        $habito = $habitos->update([
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
            return redirect()->route('paciente.edit', $id)->with('message', 'Paciente editado com sucesso!');
        else
            return redirect()->route('paciente.edit', $id)->withErrors(['errors' => 'Problema ao editar paciente!']);
    }
    //--------------------------------------
    public function status_inativado($id){

        if(Gate::allows('profile_tecnico'))
            return redirect('home');

        $paciente = $this->patient->find($id);

        $update = $paciente->update([
            'status'    => 'inativo'
        ]);

        if($update){
            return redirect()->route('paciente.index', $id)->with('message-status-inativado', 'O paciente foi inativado com sucesso!');
        }else{
            return redirect()->route('paciente.index', $id)->withErrors(['errors' => 'Não foi possivel alterar o status do paciente!']);
        }
    }
    //--------------------------------------
    public function status_ativado($id){

        if(Gate::allows('profile_tecnico'))
            return redirect('home');

        $paciente = $this->patient->find($id);

        $update = $paciente->update([
            'status'    => 'ativo'
        ]);

        if($update){

            return redirect()->route('paciente.index', $id)->with('message-status-ativado', 'O paciente foi ativado com sucesso!');
        }else{
            return redirect()->route('paciente.index', $id)->withErrors(['errors' => 'Não foi possivel alterar o status do paciente!']);
        }
    }    
    //--------------------------------------
    public function destroy($id)
    {
        if(Gate::allows('profile_tecnico'))
            return redirect('home');

        $paciente   = $this->patient->find($id);
        $ocorrencia = DB::table('ocorrencias')->where('paciente_id','=',$id)->first();

        if($ocorrencia != null){
            
            $update = $paciente->update([
                'status'    => 'inativo'
            ]);

            return redirect()->route('paciente.index', $id)->with('message-no-delete', 'Paciente não pode ser deletado, pois está vinculado com outras tabelas!'); 
        }else{

                $delete = $paciente->delete();

                if($delete)
                    return redirect()->route('paciente.index')->with('message-delete', 'Paciente deletado com sucesso!');
                else
                    return redirect()->route('paciente.index')->withErrors(['errors' => 'Falha ao deletar paciente!']);
        }
    }
}