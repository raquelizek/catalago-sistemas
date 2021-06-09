<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SistemasGest;
use Illuminate\Http\Request;

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
        $sistemasgestao = new SistemasGest;
        $sistemasgestao->dev = $request->input('dev');
        $sistemasgestao->atuacao = $request->input('atuacao');
        $sistemasgestao->auth = $request->input('auth');
        $sistemasgestao->diretsi = $request->input('diretsi');
        $sistemasgestao->sistnm = $request->input('sistnm');
        $sistemasgestao->sissig = $request->input('sissig');
        $sistemasgestao->endereco = $request->input('endereco');
        $sistemasgestao->dns = $request->input('dns');
        $sistemasgestao->pdti = $request->input('pdti');
        $sistemasgestao->gac = $request->input('gac');
        $sistemasgestao->gds = $request->input('gds');
        $sistemasgestao->gnt = $request->input('gnt');
        $sistemasgestao->siapegnt = $request->input('siapegnt');
        $sistemasgestao->gns = $request->input('gns');
        $sistemasgestao->siapegns = $request->input('siapegns');
        $sistemasgestao->git = $request->input('git');
        $sistemasgestao->siapegit = $request->input('siapegit');
        $sistemasgestao->gis = $request->input('gis');
        $sistemasgestao->siapegis = $request->input('siapegis');
        $sistemasgestao->prsei = $request->input('prsei');
        $sistemasgestao->numerosei = $request->input('numerosei');
        $sistemasgestao->obsv = $request->input('obsv');

        $sistemasgestao->save();
        return redirect('/consultar')->with('sucess', 'Sistema incluído com sucesso.');
    }
}
