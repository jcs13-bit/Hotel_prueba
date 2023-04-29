<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ClienteController::class, 'index'])->name('cliente.home');

Route::get('/validar', [ClienteController::class, 'registroValidar'])->name('cliente.validar');


Route::post('/registro', [ClienteController::class, 'create'])->name('cliente.registro');



//Route::get('/registro-reserva', [ClienteController::class, 'index'])->name('cliente.registro-reserva');
          
