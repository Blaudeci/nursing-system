<?php

namespace App\Http\Controllers\Painel;

use DB;
use Gate;
use DateTime;
use App\Models\Painel\Ocorrencia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RelatorioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dt = new DateTime();
        $data = $dt->format('Y-m-d');
        $start_date = $data;
        $end_date = $data;

        $ocorrencias = DB::table('ocorrencias')
                ->whereDate('created_at', $data)
                ->get();

        return view('painel.ocorrencia.relatorio', compact('ocorrencias', 'start_date', 'end_date'));
    }

    public function store(Request $request)
    {
        $dataForm   = $request->all();

        $start_date = $dataForm['start_date'];
        $end_date   = $dataForm['end_date'];

        if($start_date != null && $end_date != null){
            if($start_date == $end_date){
                $ocorrencias = DB::table('ocorrencias')
                    ->whereDate('created_at', $start_date)
                    ->get();
            }else{
                $ocorrencias = DB::table('ocorrencias')->whereDate('created_at', '>=', $start_date)->whereDate('created_at', '<=', $end_date)->get();
            }
        }

        return view('painel.ocorrencia.relatorio', compact('ocorrencias', 'start_date', 'end_date'));

    }
}