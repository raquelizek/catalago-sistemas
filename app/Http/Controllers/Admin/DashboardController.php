<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SistemasGest;
use App\Models\SistemasGestao;
use App\Models\SistemasTec;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('admin.registeru')->with('users', $users);
    }
    public function registeredit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('admin.edit')->with('users', $users);
    }

    public function registerupdate(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->update();
        return redirect('/usuarios-registrados')->with('status', 'Usuário alterado com sucesso.');
    }

    public function registerdelete(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('/usuarios-registrados')->with('status', 'Usuário excluído com sucesso.');
    }
    public function indexx()
    {
        $indexreg = DB::table('sistemasgestao')
            ->join('sistemastecnico', 'sist_id', '=', 'sistGestaoFK')
            ->get();

        return view('admin.dashboard')->with('indexreg', $indexreg);
    }

    public function index()
    {
        $sistemasgestao = SistemasGest::all();
        return view('admin.dashboard');
    }

    
}
