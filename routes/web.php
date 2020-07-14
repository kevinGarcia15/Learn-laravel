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
    return view('welcome');
});

Route::get('home', function () {
    $name = 'kevin';
    return view('home', compact('name'));
})->name('home');

Route::get('portafolio', 'PortafolioController')->name('portafolio');//Declaracion de rutas haciendo uso de controladores
//Declaracion de rutas haciendo uso de controladores y resource
Route::get('portafolioIndex', 'PortafolioResourceController@index')->name('portafolioResource');
//crear ruta para todos nuestros metodos de nuestro controlador Resource
Route::resource('projects','PortafolioResourceController');
Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact', 'ContactController@store')->name('contactStore');
