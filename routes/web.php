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

Route::get('/', 'ProductController@index');
//Route::get('show/{id}', 'ProductController@show');
Route::get('getProduct', 'ProductController@getProduct');

Route::get('add', 'ProductController@add')->name('Product.add');
Route::post('saveAdd', 'ProductController@saveAdd');

Route::get('edit/{id}', 'ProductController@edit')->name('Product.edit');
Route::post('saveEdit/{id}', 'ProductController@saveEdit')->name("xuan");

Route::get('remove/{id}', 'ProductController@remove')->name('Product.remove');

