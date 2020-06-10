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
Auth::routes();

Route::get('/', function () {
    return redirect()->route('home');
});


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add_product_yongcharoen', 'productyongController@index'); 
Route::post('/add_product_yongcharoen/uploadFile', 'productyongController@import');


