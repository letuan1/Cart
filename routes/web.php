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

Route::get('/', 'BookController@index')->name('index');

Route::get('/cart', 'BookController@cart')->name('cart');

Route::get('/add-cart/{name}/{auther}/{price}', 'BookController@addNewCart')->name('addNewCart');

Route::get('/delete', 'BookController@delete')->name('delete');
