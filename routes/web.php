<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('publico.home');
});*/

Route::resource('/','indexController');

Route::get('/services',function(){
    return view('publico.services');
});
//noticias
Route::get('/publicaciones/{id}','publicacionesController@post');
Route::get('/noticias','publicacionesController@noticias');

Route::get('/biblioteca','bibGeneralController@about');

Route::get('/equipo','bibGeneralController@equipo');

Route::get('/recursos',function(){
    return view('publico.recursos.index');
});

Route::resource('/bibliotecadigital','bibDigitalController');

