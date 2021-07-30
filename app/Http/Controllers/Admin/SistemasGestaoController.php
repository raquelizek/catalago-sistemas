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
        $sistemas =CatalogoSistemas::all();
        
        
       return view('admin.cadastrarsis');
        
    }

    public function create()
    {
        return view('admin.cadastrarsis');
    }

    public function store(Request $request)
    {
        
        $sistemas = [
            'sistemasID' => request('sistemasID'),
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
            'obsv' => request('obsv'),
        ];

        CatalogoSistemas::create($sistemas);
        return redirect('/consultar')->with('status', 'Sistema incluído com sucesso.');
    }
        
    public function show()
    {
        $sistemas = CatalogoSistemas::all(); 
         
        return view('admin.consultar')->with('sistemas', $sistemas);
        
    }

   
    public function consultarsistema(Request $Request, $id)
    //////// consultar sistemas nome da rota /////////
    {
        $GEST = CatalogoSistemas::firstWhere('sistemasID', $id);
        return view('admin.consultarsis')->with('GEST', $GEST);
       // $GEST = DB::table('sistemasgestao')
           // ->join('sistemastecnico', 'sistGestaoID', '=', 'sistGestaoFK')
           // ->where('sistGestaoFK', '=', '$sistGestaoID')
           // ->get();
       // return view('admin.consultarsis')->with('GEST', $GEST);
    }
 
    public function update ()

    {
//1- colocar request / 2- find igual no tecnico / 3-declarar os requests e no final chamar a função update
    }
}
