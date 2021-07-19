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
Auth::routes();


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
	Route::get('map', function () {
		return view('pages.maps');
	})->name('map');
	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');
	Route::get('table-list', function () {
		return view('pages.tables');
	})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {

	Route::get('/dashboard', function () {
		return view('admin.dashboard');
	});
	Route::get('/consultar', function () {
		return view('admin.consultar');
	});

	Route::get('/info-tec', function () {
		return view('admin.cadastrotec');
	});
	Route::get('/meu-perfil', function () {
		return view('admin.profile');
	});
	Route::get('/consultar-sist', function () {
		return view('admin.consultarsis');
	});

	Route::get('/usuarios-registrados', [App\Http\Controllers\Admin\DashboardController::class, 'show']);
	Route::get('/cadastrar-sistemas', [App\Http\Controllers\Admin\SistemasCatalogoController::class, 'create']);
	Route::post('/salvarsistema', [App\Http\Controllers\Admin\SistemasCatalogoController::class, 'store']);
	Route::get('/edit/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'edit']);
	Route::put('/usuarios-registrados/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'update']);
	Route::delete('/usuarios-deletados/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'destroy']);
	Route::get('/consultar', [App\Http\Controllers\Admin\SistemasCatalogoController::class, 'show']);
	Route::post('/salvarsistematec', [App\Http\Controllers\Admin\SistemasCatalogoController::class, 'store']);
	Route::get('/info-tec/{sistemasID}', [App\Http\Controllers\Admin\SistemasCatalogoController::class, 'edit']);
	Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
	Route::get('/consultar-sist/{sistemasID}', [App\Http\Controllers\Admin\SistemasCatalogoController::class, 'consultarsistema']);
});
