<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\ReservaController;
use App\Models\Habitacion;
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

Route::post('/registro', [ClienteController::class, 'store'])->name('cliente.registro');

Route::get('/habitaciones', [HabitacionController::class, 'index'])->name('habitacion.index');

Route::get('/habitacion_disponible/{cliente}', [HabitacionController::class, 'show'])->name('habitacion.disponible');

Route::get('/reservacion/{cliente}', [ReservaController::class, 'create'])->name('habitacion.reservacion');

Route::post('/reserva/{cliente}', [ReservaController::class, 'store'])->name('habitacion.reserva');



//Route::get('/registro-reserva', [ClienteController::class, 'index'])->name('cliente.registro-reserva');
          
