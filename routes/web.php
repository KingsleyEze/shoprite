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

//Route::get('/', function () {
//    return view('welcome');
//});

//Home
Route::get('', 'HomeController@getIndex');

//Product
Route::get('/products', 'ProductController@getIndex');
Route::get('/products/{type}', 'ProductController@productByType');
Route::get('/product/details/{productId}', 'ProductController@productDetails');

//Cart
Route::get('/cart', 'CartController@getIndex');
Route::get('/cart/checkout', 'CartController@checkout');

//Master
Route::get('/master','MasterController@getIndex');

//Master - Product Manager
Route::get('/master/products','MasterController@productList');
Route::get('/master/product/create','MasterController@createProduct');
Route::post('/master/product/save','MasterController@saveProduct');
