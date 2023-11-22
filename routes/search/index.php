<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\principal\BusquedaController;

Route::get('/busquedas', [BusquedaController::class, 'index'])->name('busquedas');
