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

Route::get('/categories', 'CategoryController@index');
Route::get('/categories/{id}', 'CategoryController@show');

Route::get('/products', 'ProductController@index');
Route::get('/products/{id}', 'ProductController@show');

Route::get('/customers', 'CustomerController@index');
Route::get('/customers/{id}', 'CustomerController@show');

Route::get('/orders', 'OrderController@index');
Route::get('/orders/{id}', 'OrderController@show');


Route::get('/orders/products', 'OrderController@index');