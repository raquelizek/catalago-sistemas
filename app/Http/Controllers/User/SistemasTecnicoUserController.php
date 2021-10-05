<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CatalogoSistemas;
use Illuminate\Http\Request;

class SistemasTecnicoUserController extends Controller
{
    public function index()
    {
        $sistemastec = CatalogoSistemas::all();
        return view('user.painel-graficos')->with('sistemastec', $sistemastec);
    }
}
