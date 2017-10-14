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

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $dataForm = $request->all();
        $start_date = $dataForm['start_date'];
        $end_date = $dataForm['end_date'];

        $ocorrencias = DB::table('ocorrencias')->whereBetween('created_at', array($start_date, $end_date))->get();


        return view('painel.ocorrencia.relatorio', compact('ocorrencias', 'start_date', 'end_date'));

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
