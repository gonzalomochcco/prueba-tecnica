<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmpresasController;

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

Route::get('/', [EmpresasController::class, 'index'])->name("empresas");

//Route::get('/', [EmpresasController::class, 'designar_trabajadores'])->name("d_trabajadores");

//Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');
