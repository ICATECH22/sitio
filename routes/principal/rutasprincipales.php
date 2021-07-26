<?php
/**
 * RUTAS PRINCIPALES DE LOS CAMBIOS DE LA PÁGINA WEB ADMINISTRABLE
 * estas rutas son cargadas en el RouteServiceProvider
 * DESARROLLADOR POR MIS. DANIEL MÉNDEZ CRUZ
 */
Auth::routes(['register' => false]);

 Route::get('/principal', 'principal\MainController@index')->name('principal');

 Route::get('/principal/noticias', 'principal\MainController@noticias')->name('principal.news');
 Route::get('/principal/transparencia', 'principal\MainController@gettransparencia')->name('transparencia');
 Route::get('/principal/normatividad', 'principal\MainController@getnormatividad')->name('normatividad');
 Route::get('/principal/comunicados', 'ComunicadoController@getnews')->name('comunicados');

