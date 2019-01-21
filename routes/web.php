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

Route::get('/biblioteca',function(){
    return view('publico.about');
});

Route::get('/recursos',function(){
    return view('publico.recursos.index');
});

Route::resource('/bibliotecadigital','bibDigitalController');