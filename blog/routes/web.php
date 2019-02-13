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

Route::get('/', function () {
    return view('home');

});

//Sirve para darle un alias al url
Route::get('uno', ['as' => 'contactos',function()
{
   return "Seccion de Contactos";
}]);

Route::get('saludos/{nombre?}', function($nombre ="Invitado"){
   return "Saludos $nombre";
})->where('nombre', "[A-Za-z]+");