<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ece\EceController;

Route::get('/ece-icatech/inicio', [EceController::class, 'index'])->name('ece_icatech.index');
// certificaciones
Route::get('/ece-icatech/certificaciones', [EceController::class, 'course'])->name('ece_icatech.certificaciones');
// contactanos
Route::get('/ece-icatech/contactanos', [EceController::class, 'contact'])->name('ece_icatech.contactanos');
// about us
Route::get('/ece-icatech/acerca-de-nosotros', [EceController::class, 'about'])->name('ece_icatech.acercadenosotros');

// certificaciones
Route::get('/ece-icatech/certificacion/ec0076', [EceController::class, 'certificacion_0076'])->name('ece_icatech.certificacion.ec0076');
Route::get('/ece-icatech/certificacion/ec02017.1', [EceController::class, 'certificacion_02017_1'])->name('ece_icatech.certificacion.ec02017_1');
Route::get('/ece-icatech/certificacion/ece0127', [EceController::class, 'certificacion_0127'])->name('ece_icatech.certificacion.ec0127');
Route::get('/ece-icatech/certificacion/ece0305', [EceController::class, 'certificacion_0305'])->name('ece_icatech.certificacion.ec0305');
Route::get('/ece-icatech/certificacion/ece0366', [EceController::class, 'certificacion_0366'])->name('ece_icatech.certificacion.ec0366');
Route::get('/ece-icatech/certificacion/ece0401', [EceController::class, 'certificacion_0401'])->name('ece_icatech.certificacion.ec0401');
Route::get('/ece-icatech/certificacion/ece1415', [EceController::class, 'certificacion_1415'])->name('ece_icatech.certificacion.ec1415');


