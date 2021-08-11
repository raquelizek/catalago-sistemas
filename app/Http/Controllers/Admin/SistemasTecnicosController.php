<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CatalogoSistemas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\Stmt\Echo_;

class SistemasTecnicosController extends Controller
{
    public function index()
    {
        $sistemastec = CatalogoSistemas::all();
        return view('admin.painel')->with('sistemastec', $sistemastec);
    }

    public function create()
    {
        return view('admin.cadastrotec');
    }

    public function store(Request $request, $id)
    {
        $sistemastec = CatalogoSistemas::find($id);

            $sistemastec->ambiente_hospedagem = $request-> input('ambiente_hospedagem');
            $sistemastec->prioridade = $request-> input('prioridade');
            $sistemastec->linguagem_v = $request-> input('linguagem_v');
            $sistemastec->framework = $request-> input('framework');
            $sistemastec->banco_v = $request-> input('banco_v');
            $sistemastec->intra_inter = $request-> input('intra_inter');
            $sistemastec->nome_banco = $request-> input('nome_banco');
            $sistemastec->ip_hospedagemapp = $request-> input('ip_hospedagemapp');
            $sistemastec->ip_hospedagembd = $request-> input('ip_hospedagembd');
            $sistemastec->tamanho_app = $request-> input('tamanho_app');
            $sistemastec->tamanho_bd = $request-> input('tamanho_bd');
            $sistemastec->ps_sistemas = $request-> input('ps_sistemas');
            $sistemastec->sistemas_inte = $request-> input('sistemas_inte');
            $sistemastec->ps_banco = $request-> input('ps_banco');
            $sistemastec->banco_inte = $request-> input('banco_inte');
            $sistemastec->ps_servico = $request-> input('ps_servico');
            $sistemastec->servico_inte = $request-> input('servico_inte');
            $sistemastec->end_gitinss = $request-> input('end_gitinss');
            $sistemastec->autenticacao = $request-> input('autenticacao');
            $sistemastec->obsvr = $request-> input('obsvr'); 
            $sistemastec->update();
        return redirect('/consultar')->with('status', 'Informações Técnicas cadastradas.');
    }

    public function show(Request $Request, $id)
    {
       //echo $id; exit();
        $VAI = CatalogoSistemas::firstWhere('sistemasID', $id);
      
        //echo $VAI->ambiente_hospedagem;
        //print_r($VAI); 
        //exit();
        return view('admin.cadastrotec')->with('VAI', $VAI);
    }

    public function edit($id)
    {
        $VAI = CatalogoSistemas::firstWhere('sistemasID', $id);
        return view('admin.cadastrotec')->with('VAI', $VAI);
    }

    public function update($id)
    {
        $sistemastec = CatalogoSistemas::where('sistemasID', $id)->get($id);

        return redirect('/consultar')->with('sistemastec', $sistemastec);
    }
}
