<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SistemasTec;
use Illuminate\Http\Request;

class SistemasTecnicosController extends Controller
{
    public function index()
    {
        $sistemastecnicos = SistemasTec::all();
        return view('admin.cadastrotec');
    }

    public function create($id)
    {
        $sistemastecnico = SistemasTec::findOrFail($id);
        return view('admin.cadastrotec')->with('sistemastecnico', $sistemastecnico);
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
            'obsvr' => request('obsvr')
        ];
        
    }
}
