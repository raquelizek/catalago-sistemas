<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SistemasGest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\DomCrawler\Form;

class SistemasGestaoController extends Controller
{
    public function index()
    {
        $sistemasgestao = SistemasGest::all();
        return view('admin.cadastrarsis');
    }

    public function create()
    {
        return view('admin.cadastrarsis');
    }

    public function store(Request $request)
    {
        $sistemasgestao = [
            'sist_id' => request('sist_id'),
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
        SistemasGest::create($sistemasgestao);
        return redirect('/consultar')->with('status', 'Sistema incluído com sucesso.');
    }
        
    public function allregister()
    {
        $sistemas = SistemasGest::all();
        return view('admin.consultar')->with('sistemas', $sistemas);
    }

    public function editarsist($id)
    {
        $query = SistemasGest::findOrFail($id);
        return view('admin.concultarsis')->with('query', $query);
    }
   
    public function consultarsistemas()
    {
        $consultarsist = DB::table('sistemasgestao')
        ->join('sistemastecnico', 'sist_id', '=', 'sistt_id')
        ->get();
        return view('admin.consultarsis')->with('consultarsist', $consultarsist);
    }
}
