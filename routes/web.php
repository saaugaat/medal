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

Route::get('/', 'ViewController@welcome');
Route::get('/about', 'ViewController@about');
Route::get('/descrption', 'ViewController@descrption');
Route::get('/checkout', 'CartController@checkout');
Route::get('/productdescription/{id}', function (){
    return view('productdescription');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/product', 'ProductController@index');
// Route::post('/product', 'ProductController@store');
Route::resource('/product', 'ProductController');
// Route::resource('/cart', 'CartController');
Route::get('/cart', 'CartController@index');
Route::get('/cart/{{ id }}/delete', 'CartController@destroy');

Route::post('/addtocart', 'CartController@store');

Route::post('/placeorder', 'OrderController@store');

