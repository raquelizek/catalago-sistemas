<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CatalogoSistemas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\DomCrawler\Form;

class SistemasGestaoController extends Controller
{
    public function index()
    {
        $sistemasgestao =CatalogoSistemas::all();
        return view('admin.cadastrarsis');
    }

    public function create()
    {
        return view('admin.cadastrarsis');
    }

    public function store(Request $request)
    {
        $sistemasgestao = [
            'sistGestaoID' => request('sistGestaoID'),
            'dev' => request('dev'),
            'atuacao' => request('atuacao'),
            'auth' => request('auth'),
            'diretsi' => request('diretsi'),
            'sistnm' => request('sistnm'),
            'sissig' => request('sissig'),
            'endereco' => request('endereco'),
            'status' => request('status'),
            'dns' => request('dns'),
            'pdti' => request('pdti'),
            'gac' => request('gac'),
            'gds' => request('gds'),
            'gnt' => request('gnt'),
            'siapegnt' => request('siapegnt'),
            'gns' => request('gns'),
            'siapegns' => request('siapegns'),
            'git' => request('git'),
            'siapegit' => request('siapegit'),
            'gis' => request('gis'),
            'siapegis' => request('siapegis'),
            'prsei' => request('prsei'),
            'numerosei' => request('numerosei'),
            'obsv' => request('obsv')
        ];
        CatalogoSistemas::create($sistemasgestao);
        return redirect('/consultar')->with('status', 'Sistema incluído com sucesso.');

        $sistemastecnicos = [
            'sistTecnicoID' => request('sistTecnicoID'),
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
            'sistGestaoFK' => request('sistGestaoFK'),
            'obsvr' => request('obsvr')
        ];
        CatalogoSistemas::create($sistemastecnicos);
        return redirect('/consultar')->with('status', 'Informações Técnicas Cadastradas.');
    }
        
    public function allregister()
    {
        $sistemas = CatalogoSistemas::all();
        return view('admin.consultar')->with('sistemas', $sistemas);
    }

    public function editarsist($id)
    {
        $query = CatalogoSistemas::findOrFail($id);
        return view('admin.concultarsis')->with('query', $query);
    }
   
    public function consultarsistema(Request $Request, $id)
    {
        $GEST = CatalogoSistemas::firstWhere('sistGestaoID', $id);
        return view('admin.consultarsis')->with('GEST', $GEST);
       // $GEST = DB::table('sistemasgestao')
           // ->join('sistemastecnico', 'sistGestaoID', '=', 'sistGestaoFK')
           // ->where('sistGestaoFK', '=', '$sistGestaoID')
           // ->get();
       // return view('admin.consultarsis')->with('GEST', $GEST);
    }
    
}
