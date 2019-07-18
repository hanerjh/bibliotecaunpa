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

Route::get('/recursos',function(){
    return view('publico.recursos.index');
});

Route::get('/solicitud_compra',function(){
    return view('publico.webverticalmenu.solicitudes');
});

Route::get('/fqas',function(){
    return view('publico.preguntasfrecuentes');
});

Route::get('/nuevasadquisiciones',function(){
    return view('publico.nuevasadquisiciones');
});
//noticias y eventos
Route::get('/publicaciones/{id}','publicacionesController@post');
Route::get('/noticias','publicacionesController@noticias');
Route::get('/eventos/{id}','publicacionesController@post_evento');
Route::get('/eventos','publicacionesController@eventos');

Route::get('/biblioteca','bibGeneralController@about');
Route::get('/equipo','bibGeneralController@equipo');
Route::get('/enlacesdeinteres','bibGeneralController@enlaces_interes');
Route::get('/gestoresbibliograficos','bibGeneralController@gestoresbibliograficos');
Route::get('/contacto',function(){
    return view('publico.contacto');
});



Route::resource('/bibliotecadigital','bibDigitalController');

//consultar usuario
Route::get('/estatus','wsController@usu_multa');
Route::get('/usuario/{id}','wsController@usu_koha');


//RUTAS DEL MODULO DE ADMINISTRADOR



Route::get('/admin',function(){
    return view('admin.index');
});

Route::get('/actualizarnoticia','admin\noticiaController@Listaactualizacion');
Route::resource('/regnoticia','admin\noticiaController');
Route::resource('/regpublicaciones','admin\publicacionesController');
Route::resource('/regeventos','admin\eventosController');

