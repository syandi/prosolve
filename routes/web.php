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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/machines', 'MachineController@index');

Route::get('/machines/new', 'MachineController@create');

Route::post('/machines', 'MachineController@store');

Route::get('/machines/{id}/edit', 'MachineController@edit');

Route::post('/machines/{id}', 'MachineController@update');

Route::get('/machines/{id}/remove', 'MachineController@destroy');
