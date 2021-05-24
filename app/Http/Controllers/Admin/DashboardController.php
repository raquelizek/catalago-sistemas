<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('admin.registeru')->with('users', $users);
    }
    public function registeredit (Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('admin.edit')->with('users', $users);
    }



}
