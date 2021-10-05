<?php

namespace App\Http\Controllers\User;

use App\Exports\SistemasExport;
use Maatwebsite\Excel\Facades\Excel as Excel;
use App\Http\Controllers\Controller;
use App\Models\CatalogoSistemas;
use Illuminate\Http\Request;
use \PDF;

class SistemasController extends Controller
{
    public function export() 
    {
        return Excel::download(new SistemasExport, 'sistemas.xlsx');
    }
 
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
