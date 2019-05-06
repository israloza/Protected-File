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


Route::get('/', function () {
    return view('welcome');
});*/
Route::get("/",function (){
    return view("Template.template");
});
Route::resource('PersonasFisicas','PersonasFisicasController');

Route::resource('Administradores','AdminstradoresController');

Route::resource('PersonasMorales','PersonasMoralesController');

Route::resource('Logins','LoginsController');

Route::resource('ModalidadesOtrosTipos','ModalidadesOtrosTiposController');

Route::resource('SujetosObligados','SujetosObligadosController');