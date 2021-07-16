<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CatalogoSistemas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function show()
    {
        $users = User::all();
        return view('admin.registeru')->with('users', $users);
    }
    public function edit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('admin.edit')->with('users', $users);
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->update();
        return redirect('/usuarios-registrados')->with('status', 'Usuário alterado com sucesso.');
    }

    public function destroy(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('/usuarios-registrados')->with('status', 'Usuário excluído com sucesso.');
    }

    public function index()
    {
        $sistemasinicial = CatalogoSistemas::all();
        return view('admin.dashboard')->with('sistemasinicial', $sistemasinicial);
    }

    
}
