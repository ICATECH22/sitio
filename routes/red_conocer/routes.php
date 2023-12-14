<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ece\EceController;

Route::get('/ece-icatech/inicio', [EceController::class, 'index'])->name('ece_icatech.index');
Route::get('/ece-icatech/acerca-de-nosotros', [EceController::class, 'index'])->name('ece_icatech.acercade');
// certificaciones
Route::get('/ece-icatech/certificaciones', [EceController::class, 'index'])->name('ece_icatech.certificaciones');
// contactanos
Route::get('/ece-icatech/contactanos', [EceController::class, 'index'])->name('ece_icatech.contactanos');


