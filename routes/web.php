<?php

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

Route::get('/', [ContatoController::class, 'index'])->name('principal');
Route::get('/contato', [ContatoController::class, 'store'])->name('formulario_contato');
Route::post('/contato', [ContatoController::class, 'store']);
