<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Response as FacadeResponse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CatalogoSistemas;
use Barryvdh\DomPDF\Facade as PDF;



class PdfController extends Controller
{

    public function show()
    {
        $gerarpdf = CatalogoSistemas::all();
        $pdf = PDF::loadView('user.geradorpdf', compact('gerarpdf'));
        return $pdf->setPaper('a4')->stream('sistemas.pdf');
        
    }
}
