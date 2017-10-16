<?php

namespace App\Http\Controllers\Painel;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GraficoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $start_date = "00/00/0000";
        $end_date   = "00/00/0000";

        $masculino = DB::table('pacientes')->join('ocorrencias', function ($join) {
                    $join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                        ->where('sexo','=', "Masculino");
                    })->get()->count();

        $feminino = DB::table('pacientes')->join('ocorrencias', function ($join) {
                    $join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                        ->where('sexo','=', "Feminino");
                    })->get()->count();

        $tecnico = DB::table('pacientes')->join('ocorrencias', function ($join) {
                    $join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                        ->where('perfil','=', "Técnico");
                    })->get()->count();

        $superior = DB::table('pacientes')->join('ocorrencias', function ($join) {
                    $join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                        ->where('perfil','=', "Superior");
                    })->get()->count();

        $terceirizado = DB::table('pacientes')->join('ocorrencias', function ($join) {
                    $join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                        ->where('perfil','=', "Terceirizado");
                    })->get()->count();

        $adm = DB::table('pacientes')->join('ocorrencias', function ($join) {
                    $join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                        ->where('perfil','=', "Tec Administrativo");
                    })->get()->count();

        $docente = DB::table('pacientes')->join('ocorrencias', function ($join) {
                    $join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                        ->where('perfil','=', "Docente");
                    })->get()->count();

        $hospital = DB::table('ocorrencias')->where('encaminhamento','=', "Hospital")->get()->count();

        $esf = DB::table('ocorrencias')->where('encaminhamento','=', "ESF")->get()->count();

        $familia = DB::table('ocorrencias')->where('encaminhamento','=', "Família")->get()->count();

        $psicologa = DB::table('ocorrencias')->where('encaminhamento','=', "Psicóloga")->get()->count();

        $orientacoes = DB::table('ocorrencias')->where('conduta_enfermagem','=', "Orientações")->get()->count();

        $procedimentos = DB::table('ocorrencias')->where('conduta_enfermagem','=', "Procedimentos/Observação")->get()->count();

        $encaminhamentos = DB::table('ocorrencias')->where('conduta_enfermagem','=', "Encaminhamentos")->get()->count();

        $exame_preventivo = DB::table('ocorrencias')->where('tipo_queixa','=', "Exame Preventivo")->get()->count();

        $febre = DB::table('ocorrencias')->where('tipo_queixa','=', "Febre")->get()->count();

        $picada_inseto = DB::table('ocorrencias')->where('tipo_queixa','=', "Picada Inseto")->get()->count();

        $geniturinaria = DB::table('ocorrencias')->where('tipo_queixa','=', "Geniturinária")->get()->count();

        $orientacao = DB::table('ocorrencias')->where('tipo_queixa','=', "Orientação")->get()->count();

        $ocular = DB::table('ocorrencias')->where('tipo_queixa','=', "Ocular/Auricular")->get()->count();

        $colica = DB::table('ocorrencias')->where('tipo_queixa','=', "Cólica Mestrual")->get()->count();

        $lesao = DB::table('ocorrencias')->where('tipo_queixa','=', "Lesão")->get()->count();

        $gastrintestinal = DB::table('ocorrencias')->where('tipo_queixa','=', "Gastrintestinal")->get()->count();

        $tontura = DB::table('ocorrencias')->where('tipo_queixa','=', "Tontura/Mal Estar")->get()->count();

        $cefaleia = DB::table('ocorrencias')->where('tipo_queixa','=', "Cefaléia")->get()->count();

        return view('painel.ocorrencia.graficos', compact('start_date', 'end_date', 'masculino', 'feminino', 'tecnico', 'superior', 'terceirizado', 'adm', 'docente', 'hospital', 'esf', 'familia', 'psicologa', 'orientacoes', 'procedimentos', 'encaminhamentos', 'exame_preventivo', 'febre', 'picada_inseto', 'geniturinaria', 'orientacao', 'ocular', 'colica', 'lesao', 'gastrintestinal', 'tontura', 'cefaleia'));
    }

    public function store(Request $request)
    {
        $dataForm = $request->all();

        $start_date = $dataForm['start_date'];
        $end_date   = $dataForm['end_date'];

        $masculino = DB::table('pacientes')->join('ocorrencias', function ($join) {
                    $join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                        ->where('sexo','=', "Masculino");
                    })->select('pacientes.id','ocorrencias.created_at')->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $feminino = DB::table('pacientes')->join('ocorrencias', function ($join) {
                    $join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                        ->where('sexo','=', "Feminino");
                    })->select('pacientes.id','ocorrencias.created_at')->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $tecnico = DB::table('pacientes')->join('ocorrencias', function ($join) {
                    $join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                        ->where('perfil','=', "Técnico");
                    })->select('pacientes.id','ocorrencias.created_at')->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $superior = DB::table('pacientes')->join('ocorrencias', function ($join) {
                    $join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                        ->where('perfil','=', "Superior");
                    })->select('pacientes.id','ocorrencias.created_at')->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $terceirizado = DB::table('pacientes')->join('ocorrencias', function ($join) {
                    $join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                        ->where('perfil','=', "Terceirizado");
                    })->select('pacientes.id','ocorrencias.created_at')->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $adm = DB::table('pacientes')->join('ocorrencias', function ($join) {
                    $join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                        ->where('perfil','=', "Tec Administrativo");
                    })->select('pacientes.id','ocorrencias.created_at')->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $docente = DB::table('pacientes')->join('ocorrencias', function ($join) {
                    $join->on('pacientes.id', '=', 'ocorrencias.paciente_id')
                        ->where('perfil','=', "Docente");
                    })->select('pacientes.id','ocorrencias.created_at')->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $hospital = DB::table('ocorrencias')->where('encaminhamento','=', "Hospital")->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $esf = DB::table('ocorrencias')->where('encaminhamento','=', "ESF")->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $familia = DB::table('ocorrencias')->where('encaminhamento','=', "Família")->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $psicologa = DB::table('ocorrencias')->where('encaminhamento','=', "Psicóloga")->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $orientacoes = DB::table('ocorrencias')->where('conduta_enfermagem','=', "Orientações")->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $procedimentos = DB::table('ocorrencias')->where('conduta_enfermagem','=', "Procedimentos/Observação")->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $encaminhamentos = DB::table('ocorrencias')->where('conduta_enfermagem','=', "Encaminhamentos")->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $exame_preventivo = DB::table('ocorrencias')->where('tipo_queixa','=', "Exame Preventivo")->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $febre = DB::table('ocorrencias')->where('tipo_queixa','=', "Febre")->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $picada_inseto = DB::table('ocorrencias')->where('tipo_queixa','=', "Picada Inseto")->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $geniturinaria = DB::table('ocorrencias')->where('tipo_queixa','=', "Geniturinária")->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $orientacao = DB::table('ocorrencias')->where('tipo_queixa','=', "Orientação")->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $ocular = DB::table('ocorrencias')->where('tipo_queixa','=', "Ocular/Auricular")->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $colica = DB::table('ocorrencias')->where('tipo_queixa','=', "Cólica Mestrual")->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $lesao = DB::table('ocorrencias')->where('tipo_queixa','=', "Lesão")->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $gastrintestinal = DB::table('ocorrencias')->where('tipo_queixa','=', "Gastrintestinal")->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $tontura = DB::table('ocorrencias')->where('tipo_queixa','=', "Tontura/Mal Estar")->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        $cefaleia = DB::table('ocorrencias')->where('tipo_queixa','=', "Cefaléia")->whereBetween('ocorrencias.created_at', array($start_date, $end_date))->get()->count();

        return view('painel.ocorrencia.graficos', compact('start_date', 'end_date', 'masculino', 'feminino', 'tecnico', 'superior', 'terceirizado', 'adm', 'docente', 'hospital', 'esf', 'familia', 'psicologa', 'orientacoes', 'procedimentos', 'encaminhamentos', 'exame_preventivo', 'febre', 'picada_inseto', 'geniturinaria', 'orientacao', 'ocular', 'colica', 'lesao', 'gastrintestinal', 'tontura', 'cefaleia'));
    }
}