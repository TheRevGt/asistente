<?php

use App\Http\Controllers\Controller;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
//importamos las rutas de controllador
use App\Http\Controllers\adminController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\clienteController;


use function Ramsey\Uuid\v1;

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
//administrador de asistente
Route::get('/', [clienteController::class, 'index'])->name('index');

Route::get('catalogo/{categoria}', [clienteController::class, 'categoria'])->name('client.showc');

Route::get('asistente/{id}', [clienteController::class, 'asistente'])->name('client.asist');


//administrador de admin
Auth::routes();

Route::get('loginn', [adminController::class, 'index'])->name('admin.login');

Route::get('usuario', [usersController::class, 'create'])->name('admin.users');

Route::post('usuario', [usersController::class, 'store'])->name('admin.users');

Route::get('usuarios', [usersController::class, 'show'])->name('admin.showu');

Route::get('usuario/{id}', [usersController::class, 'edit'])->name('admin.editu');

Route::put('usuario/{id}', [usersController::class, 'update'])->name('admin.updateu');

Route::get('registro', [adminController::class, 'create'])->name('admin.create');

Route::post('registro', [adminController::class, 'store'])->name('admin.store');

Route::get('inventario', [adminController::class, 'show'])->name('admin.show');

Route::get('editar/{id}', [adminController::class, 'edit'])->name('admin.edit');

Route::put('editar/{id}', [adminController::class, 'update'])->name('admin.update');
