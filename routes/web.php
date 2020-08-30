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

Route::get('/', 'UserController@index');
Route::get('/search', 'UserController@search');
Route::post('/searchName', 'SearchController@store');
Route::post('/searchID', 'SearchController@storeId');
Route::resource('/pay', 'PaymentController');
