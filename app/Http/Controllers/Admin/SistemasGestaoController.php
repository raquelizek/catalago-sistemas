<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SistemasGestaoController extends Controller
{
    public function sistemareg()
    {
     
        return view('admin.cadastrarsis');
    }

}
