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

//categories routes
Route::get('/categories', 'CategoryController@index');
Route::get('/categories/{id}', 'CategoryController@show');

//products routes
Route::get('/products', 'ProductController@index');
Route::get('/products/{id}', 'ProductController@show');

//customers routes
Route::get('/customers', 'CustomerController@index');
Route::get('/customers/{id}', 'CustomerController@show');

//orders routes
Route::get('/orders', 'OrderController@index');
Route::get('/orders/{id}', 'OrderController@show');

