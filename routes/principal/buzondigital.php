<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\buzon\BuzonController;


Auth::routes(['register' => false]);
Route::get('/buzon/ciudadano/digital', [BuzonController::class, 'index'])->name('buzon.ciudadano.index');
Route::post('/buzon/ciudadano/store', [BuzonController::class, 'store'])->name('buzon.ciudadano.store');
Route::get('/buzon/ciudadano/enviado/{remitente}', [BuzonController::class, 'done'])->whereAlpha('reciever')->name('buzon.ciudadano.enviado');
Route::get('/buzon/correo/{id}', [BuzonController::class, 'show']);

