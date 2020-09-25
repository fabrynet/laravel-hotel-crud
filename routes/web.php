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
Route::get('/stanze', 'ControllerStanza@index') -> name('stanze-index');
Route::get('/stanze/show/{id}', 'ControllerStanza@show') -> name('stanze-show');
Route::get('/stanze/create', 'ControllerStanza@create') -> name('stanze-create');
