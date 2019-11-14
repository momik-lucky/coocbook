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

Route::get('/add_receipt', function () {
    return view('add_receipt');
});

Route::get('/ingredients_list', function () {
    return view('ingredients_list');
});


Route::get('/main_page', function () {
    return view('main_page');
});

Route::get('/my_receipt', function () {
    return view('my_receipt');
});


Route::get('/view_receipt', function () {
    return view('view_receipt');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
