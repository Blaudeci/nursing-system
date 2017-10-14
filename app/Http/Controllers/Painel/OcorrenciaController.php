<?php

namespace App\Http\Controllers\Painel;

use DB;
use Gate;
use App\Models\Painel\Ocorrencia;
use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OcorrenciaController extends Controller
{
    private $ocorrencia;

    public function __construct(Ocorrencia $ocorrencia)
    {
        $this->middleware('auth');
        $this->ocorrencia = $ocorrencia;
    }

    public function index()
    {   
        $ocorrencias = $this->ocorrencia->all(); 
        //$ocorrencias = DB::table('ocorrencias')->get()->;

        return view('painel.ocorrencia.index', compact('ocorrencias'));
    }

    public function index_create(){
        $pacientes = DB::table('pacientes')->get();

        return view('painel.ocorrencia.index_create', compact('pacientes'));
    }

    public function create($id)
    {
        $paciente = DB::table('pacientes')->where('id','=', $id)->first();

        return view('painel.ocorrencia.create', compact('paciente'));
    }

    public function store(Request $request)
    {
        $dataForm = $request->all();
        $user_id  = Auth()->user()->id;

        if(Auth()->user()->profile == "Admin" || Auth()->user()->profile == "Enfermeiro"){

            $insert = Ocorrencia::create([
                'user_id'                   => $user_id,
                'paciente_id'               => $dataForm['id_paciente'],
                'acompanhante'              => $dataForm['acompanhante'],
                'encaminhamento'            => $dataForm['encaminhamento'],
                'conduta_enfermagem'        => $dataForm['conduta_enfermagem'],
                'consulta_anterior'         => $dataForm['avaliacao_consulta_anterior'],
                'tipo_queixa'               => $dataForm['tipo_queixa'],
                'motivo_consulta'           => $dataForm['motivo_consulta'],
                'peso'                      => $dataForm['peso'],
                'altura'                    => $dataForm['altura'],
                'valor_imc'                 => $dataForm['valor_imc'],
                'imc'                       => $dataForm['imc'],
                'perimetro_abdominal'       => $dataForm['perimetro_abdominal'],
                'pressao_arterial'          => $dataForm['pressao_arterial'],
                'temperatura'               => $dataForm['temperatura'],
                'frequencia_cardiaca'       => $dataForm['frequencia_cardiaca'],
                'frequencia_respiratoria'   => $dataForm['frequencia_respiratoria'],
                'glicemia'                  => $dataForm['glicemia'],
                'estagio_tanner'            => $dataForm['estagio_tanner'],
                'diagnostico_enfermagem'    => $dataForm['diagnostico_enfermagem'],
                'prescricao_enfermagem'     => $dataForm['prescricao_enfermagem'],
                'evolucao_enfermagem'       => $dataForm['evolucao_enfermagem'],
                'anotacao_enfermagem'       => null
            ]);
        }else{
            if(Auth()->user()->profile == "Técnico"){
                $insert = Ocorrencia::create([
                    'user_id'                   => $user_id,
                    'paciente_id'               => $dataForm['id_paciente'],
                    'acompanhante'              => $dataForm['acompanhante'],
                    'encaminhamento'            => $dataForm['encaminhamento'],
                    'conduta_enfermagem'        => $dataForm['conduta_enfermagem'],
                    'consulta_anterior'         => $dataForm['avaliacao_consulta_anterior'],
                    'tipo_queixa'               => $dataForm['tipo_queixa'],
                    'motivo_consulta'           => null,
                    'peso'                      => null,
                    'altura'                    => null,
                    'valor_imc'                 => null,
                    'imc'                       => null,
                    'perimetro_abdominal'       => null,
                    'pressao_arterial'          => null,
                    'temperatura'               => null,
                    'frequencia_cardiaca'       => null,
                    'frequencia_respiratoria'   => null,
                    'glicemia'                  => null,
                    'estagio_tanner'            => null,
                    'diagnostico_enfermagem'    => null,
                    'prescricao_enfermagem'     => null,
                    'evolucao_enfermagem'       => null,
                    'anotacao_enfermagem'       => $dataForm['anotacao_enfermagem']
                ]);
            }
        }

        if($insert)
            return redirect('ocorrencia/index-create')->with('message', 'Ocorrência cadastrada com sucesso!');
        else
            return redirect('ocorrencia/index-create')->with('message-error', 'Erro ao cadastrar ocorrência!');
    }

    public function show($id)
    {
        $ocorrencias = $this->ocorrencia->find($id);
        $paciente = DB::table('pacientes')->where('id','=', $ocorrencias->paciente_id)->first();

        return view('painel.ocorrencia.show', compact('ocorrencias', 'paciente'));
    }

    public function edit($id)
    {
        $ocorrencias = $this->ocorrencia->find($id);
        $paciente = DB::table('pacientes')->where('id','=', $ocorrencias->paciente_id)->first();

        return view('painel.ocorrencia.edit', compact('ocorrencias', 'paciente'));
    }

    public function update(Request $request, $id)
    {
        $dataForm = $request->all();

        $ocorrencia = $this->ocorrencia->find($id);

        if(Auth()->user()->profile == "Admin" || Auth()->user()->profile == "Enfermeiro"){
            $update = $ocorrencia->update([
                'acompanhante'              => $dataForm['acompanhamento'],
                'encaminhamento'            => $dataForm['encaminhamento'],
                'conduta_enfermagem'        => $dataForm['conduta_enfermagem'],
                'consulta_anterior'         => $dataForm['avaliacao_consulta_anterior'],
                'tipo_queixa'               => $dataForm['tipo_queixa'],
                'motivo_consulta'           => $dataForm['motivo_consulta'],
                'peso'                      => $dataForm['peso'],
                'altura'                    => $dataForm['altura'],
                'valor_imc'                 => $dataForm['valor_imc'],
                'imc'                       => $dataForm['imc'],
                'perimetro_abdominal'       => $dataForm['perimetro_abdominal'],
                'pressao_arterial'          => $dataForm['pressao_arterial'],
                'temperatura'               => $dataForm['temperatura'],
                'frequencia_cardiaca'       => $dataForm['frequencia_cardiaca'],
                'frequencia_respiratoria'   => $dataForm['frequencia_respiratoria'],
                'glicemia'                  => $dataForm['glicemia'],
                'estagio_tanner'            => $dataForm['estagio_tanner'],
                'diagnostico_enfermagem'    => $dataForm['diagnostico_enfermagem'],
                'prescricao_enfermagem'     => $dataForm['prescricao_enfermagem'],
                'evolucao_enfermagem'       => $dataForm['evolucao_enfermagem'],
            ]);
        }else{
            if(Auth()->user()->profile == "Técnico"){
                $update = $ocorrencia->update([
                    'acompanhante'              => $dataForm['acompanhamento'],
                    'encaminhamento'            => $dataForm['encaminhamento'],
                    'conduta_enfermagem'        => $dataForm['conduta_enfermagem'],
                    'consulta_anterior'         => $dataForm['avaliacao_consulta_anterior'],
                    'anotacao_enfermagem'       => $dataForm['anotacao_enfermagem']
                ]);
            }
        }

        if($update)
            return redirect()->route('ocorrencia.edit', $id)->with('message', 'Ocorrência editado com sucesso!');
        else
            return redirect()->route('ocorrencia.edit', $id)->withErrors(['errors' => 'Problema ao editar ocorrência!']);
    }

    public function destroy($id)
    {
        if(Gate::allows('profile_tecnico'))
            return redirect('home');

        $ocorrencia = $this->ocorrencia->find($id);

        $delete = $ocorrencia->delete();

        if($delete)
            return redirect()->route('ocorrencia.index')->with('message-delete', 'Ocorrência deletada com sucesso!');
        else
            return redirect()->route('ocorrencia.index')->withErrors(['errors' => 'Falha ao deletar ocorrência!']);
    }
}