<?php

use Illuminate\Support\Facades\Route;

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
}) -> name('home');

// hotel
Route::get('/hotel', function(){
  return view('hotel.index');
}) -> name('hotel.index');

// STANZE
Route::get('/hotel/stanze', 'ControllerStanza@index') -> name('hotel.stanze.index');
Route::get('/hotel/stanza/show/{id}', 'ControllerStanza@show') -> name('hotel.stanza.show');
Route::get('/hotel/stanza/create', 'ControllerStanza@create') -> name('hotel.stanza.create');
Route::post('/hotel/stanza/create', 'ControllerStanza@store') -> name('hotel.stanza.store');

// PAGAMENTI
Route::resource('pagamenti', PagamentoController::class);
