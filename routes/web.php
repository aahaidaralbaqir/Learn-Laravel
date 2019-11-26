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

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

//Route Resource
Route::resource('posts', 'PostController');
/*

Route::get('/',function() {
    return '<h1>Hello world/h1>';
});

Route::get('/users/{id}/{name}',function($id,$name){
    return 'this is user'.$name.'with an id'.$id;
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
