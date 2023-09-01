<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\icats\IcatController;

Auth::routes(['register' => false]);
Route::get('/planteles/icats/entidades_federativas', [IcatController::class, 'index']);
Route::get('/plantel/icat/entidad_federativa/{nombre_icat}', [IcatController::class, 'show'])->name('plantel.icat.entidad.federativa');

