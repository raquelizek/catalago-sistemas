<?php

namespace App\Http\Controllers;

use App\Exports\SistemasExport;
use App\Models\CatalogoSistemas;
use \PDF;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel as Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function export() 
    {
        return Excel::download(new SistemasExport, 'sistemas.xlsx');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { {
            $search = request('pesquisar');
            if ($search) {
                $sistemasinicial = CatalogoSistemas::where([[


                    'sistnm',
                    'like',
                    '%' . $search . '%'

                ]])
                    ->orWhere([['diretsi', 'like', '%' . $search . '%']])
                    ->orWhere([['endereco', 'like', '%' . $search . '%']])
                    ->orWhere([['sissig', 'like', '%' . $search . '%']])
                    ->orWhere([['numerosei', 'like', '%' . $search . '%']])
                    ->orWhere([['prioridade', 'like', '%' . $search . '%']])
                    ->orWhere([['endereco', 'like', '%' . $search . '%']])
                    ->orWhere([['endereco', 'like', '%' . $search . '%']])
                    ->get();
            } else {
                $sistemasinicial = CatalogoSistemas::all();
            }
            return view('user.consultar2')->with('sistemasinicial', $sistemasinicial, 'pesquisar', $search);
        }
    }

    public function show(Request $Request, $id)

    {
        $SISTG = CatalogoSistemas::firstWhere('sistemasID', $id);
        return view('user.consultarsist2')->with('SISTG', $SISTG);
    }
}
