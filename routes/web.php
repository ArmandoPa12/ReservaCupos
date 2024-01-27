<?php

use App\Http\Controllers\generator;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('home-dashboard');
})->name('inicio');



Route::get('/dashboard/reserva', App\Http\Livewire\Reserva::class);
Route::get('/dashboard/reserva/buscar', App\Http\Livewire\Busqueda ::class)->name('buscar');
Route::get('/dashboard/reserva/opciones', App\Http\Livewire\OpcionesRegistro::class)->name('inscripcion');
Route::get('/dashboard/reserva/sortear', App\Http\Livewire\Registro::class);
Route::get('/dashboard/reserva/crear', App\Http\Livewire\CrearCarnet::class);










