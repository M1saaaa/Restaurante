<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\PermisoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\ReservaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('menus',MenuController::class);

Auth::routes();

Route::get('/roles/asignar/{Id}',[RoleController::class,'asignar'])->name('roles.asignar');

Route::Post('/roles/asignar/{Id}',[RoleController::class,'asignarStore'])->name('roles.asignarStore');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('permisos',PermisoController::class);

Route::resource('roles',RoleController::class);

Route::resource('usuarios',UsuarioController::class);   

Route::resource('mesas',MesaController::class);   

Route::get('reservas',[ReservaController::class,'create'])->name('reservas.index');

Route::post('reservas/store',[ReservaController::class,'store'])->name('reservas.store');