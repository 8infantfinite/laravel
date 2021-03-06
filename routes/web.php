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


Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/', 'BaseController@getIndex');
Route::get('/category/{id}', 'ProductController@getCategory');
Route::get('/order', 'OrderController@getIndex');
Route::post('/order', 'OrderController@postIndex');
Route::get('{id}', 'BaseController@getStatic');

