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
            'descricao' => request('descricao'),
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
        {
            $search = request('pesquisar');
            if ($search) {
                $sistemasinicial = CatalogoSistemas::where([[
             
                    
                        'sistnm',
                        'like',
                        '%' . $search . '%'
                    
                ]])
                ->orWhere([[ 'diretsi', 'like', '%' . $search . '%' ]]) 
                ->orWhere([[ 'endereco', 'like', '%' . $search . '%' ]]) 
                ->orWhere([[ 'sissig', 'like', '%' . $search . '%' ]]) 
                ->orWhere([[ 'numerosei', 'like', '%' . $search . '%' ]]) 
                ->orWhere([[ 'prioridade', 'like', '%' . $search . '%' ]]) 
                ->orWhere([[ 'endereco', 'like', '%' . $search . '%' ]]) 
                ->orWhere([[ 'endereco', 'like', '%' . $search . '%' ]]) 
                ->get();
                
            } else {
                $sistemasinicial = CatalogoSistemas::all();
            }
            return view('admin.consultar')->with('sistemasinicial', $sistemasinicial, 'pesquisar', $search);
        }
        
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
