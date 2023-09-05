<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\icats\IcatController;

Auth::routes(['register' => false]);
Route::get('/planteles/icats/entidades_federativas', [IcatController::class, 'index']);
Route::get('/plantel/icat/entidad_federativa/{nombre_icat}', [IcatController::class, 'show'])->name('plantel.icat.entidad.federativa');
Route::get('/generar/codigo/icat/entidad_federativa/{nombre}', [IcatController::class, 'generate_qr_code'])->name('generar.codigo.icat.entidad_federativa');


