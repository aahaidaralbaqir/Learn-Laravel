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


Route::get('/blog','blogController@index');
Route::get('/blog/edit/{id}','blogController@edit');
Route::post('/blog/edit','blogController@update');
Route::get('/blog/delete/{id}','blogController@delete');
Route::get('/blog/create','blogController@create');
Route::post('/blog/create','blogController@store');