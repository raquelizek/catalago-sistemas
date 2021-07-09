<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SistemasTec;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SistemasTecnicosController extends Controller
{
    public function index()
    {
        $sistemastecnicos = SistemasTec::all();
        return view('admin.cadastrotec');
    }

    public function create(Request $request, $id)
    {
        //$sistemastecnico = SistemasTec::findOrFail($id);

        return view('admin.cadastrotec')->with('id', $id);
    }

    public function store(Request $request)
    {
        $sistemastecnicos = [
            'sistt_id' => request('sistt_id'),
            'ambiente_hospedagem' => request('ambiente_hospedagem'),
            'prioridade' => request('prioridade'),
            'linguagem_v' => request('linguagem_v'),
            'framework' => request('framework'),
            'banco_v' => request('banco_v'),
            'intra_inter' => request('intra_inter'),
            'nome_banco' => request('nome_banco'),
            'ip_hospedagemapp' => request('ip_hospedagemapp'),
            'ip_hospedagembd' => request('ip_hospedagembd'),
            'tamanho_app' => request('tamanho_app'),
            'tamanho_bd' => request('tamanho_bd'),
            'ps_sistemas' => request('ps_sistemas'),
            'sistemas_inte' => request('sistemas_inte'),
            'ps_banco' => request('ps_banco'),
            'banco_inte' => request('banco_inte'),
            'ps_servico' => request('ps_servico'),
            'servico_inte' => request('servico_inte'),
            'end_gitinss' => request('end_gitinss'),
            'autenticacao' => request('autenticacao'),
            'sistGestaoFK' => request('sist_id'),
            'obsvr' => request('obsvr')
        ];
       // window.location.href "http://localhost:8001/consultar";
        //return view('admin.consultar')->with('index');
        //editar aqui
    }

    public function consultarsistema(Request $Request, $sist_id)
    {
        $consultarsistema = DB::table('sistemasgestao')
            ->join('sistemastecnico', 'sist_id', '=', 'sistGestaoFK')
            ->where('sistGestaoFK', '=', '$sist_id')
            ->get();
        return view('admin.consultarsis')->with('consultarsistema', $consultarsistema);
    }
}
