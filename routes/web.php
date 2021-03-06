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

Route::get('/', function () {
    return view('index');
});

Route::get('/products', function () {
    return view('products');
});
Route::get('/products/{productName}', function () {
    return view('products-inside');
});

Route::get('/news', function () {
    return view('news');
});
Route::get('/news/{newsName}', function () {
    return view('news-inside');
});

Route::get('/about-us', function () {
    return view('o-nas');
});

Route::get('/delivery', function () {
    return view('delivery');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::post('/order', 'EmailSendController@sendToEmail');