<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CatalogoSistemas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class SistemasTecnicosController extends Controller
{
    public function index()
    {
        $sistemastec = CatalogoSistemas::all();
        return view('admin.consultar')->with('sistemastec', $sistemastec);
    }

    public function create(Request $Request, $id)
    {
        return view('admin.cadastrotec');
    }

    public function store(Request $request)
    {
        $sistemastec = [

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
        CatalogoSistemas::create($sistemastec);
        return redirect('/consultar')->with('status', 'Informações Técnicas cadastradas.');
    }

    public function show($id)
    {
        $VAI = CatalogoSistemas::findOrFail($id);
        return view('admin.consultar')->with('VAI', $VAI);
    }

    public function edit(Request $request, $id)
    {
        $VAI = CatalogoSistemas::firstWhere('sistemasID', $id);
        return view('admin.cadastrotec')->with('VAI', $VAI);
    }

    public function update(Request $request, $id)
    {
        $sistemastec = CatalogoSistemas::find('sistemasID', 1)->get($id);
        


        return redirect('/consultar')->with('sistemastec', $sistemastec);
    }
}