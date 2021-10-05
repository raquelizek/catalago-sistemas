<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('auth.login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');
Auth::routes();


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Auth::routes();


Route::get('/consultar-sistemas', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/consultar-informacoes/{sistemasID}', [App\Http\Controllers\User\SistemasController::class, 'show']);	
Route::get('pdf', [App\Http\Controllers\User\PdfController::class, 'show']);
Route::get('sistemas/export', [App\Http\Controllers\User\SistemasController::class, 'export']);
Route::get('/painel-graficos',[App\Http\Controllers\User\SistemasTecnicoUserController::class, 'index']);



Route::group(['middleware' => ['auth', 'admin']], function () {

	Route::get('/consultar', function () {
		return view('admin.consultar');
	});
	Route::get('/cadastrar-sistemas', function () {
		return view('admin.cadastrarsis');
	});
	Route::get('/info-tec', function () {
		return view('admin.cadastrotec');
	});
	Route::get('/usuarios-registrados', function () {
		return view('admin.registeru');
	});
	Route::get('/editar-permissoes', function () {
		return view('admin.editarpermissoes');
	});
	Route::get('/painel', function () {
		return view('admin.painel');
	});

	Route::get('/usuarios-registrados', [App\Http\Controllers\Admin\DashboardController::class, 'show']);
	Route::get('/cadastrar-sistemas/{sistemasID}', [App\Http\Controllers\Admin\SistemasGestaoController::class, 'update']);
	Route::get('/cadastrar-sistemas', [App\Http\Controllers\Admin\SistemasGestaoController::class, 'create']);
	Route::post('/salvarsistema', [App\Http\Controllers\Admin\SistemasGestaoController::class, 'store']);
	Route::get('/editar-permissoes/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'edit']);
	Route::put('/usuarios-registrados/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'update']);
	Route::delete('/usuarios-deletados/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'destroy']);
	Route::get('/consultar', [App\Http\Controllers\Admin\SistemasGestaoController::class, 'show']);
	Route::post('/salvarsistematec/{sistemasID}', [App\Http\Controllers\Admin\SistemasTecnicosController::class, 'store']);
	Route::get('/info-tec/{sistemasID}', [App\Http\Controllers\Admin\SistemasTecnicosController::class, 'show']);
	Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
	Route::get('/consultar-sist/{sistemasID}', [App\Http\Controllers\Admin\SistemasGestaoController::class, 'consultarsistema']);
	Route::get('/painel', [App\Http\Controllers\Admin\SistemasTecnicosController::class, 'index']);	
	
});
