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

// Route::get('coba', 'CobaController@index');
Route::get('/home', 'HomeController@index');

Route::get('/login', function () {
    return view('login');
});
Route::get('/genre', function () {
    return view('genre');
});
Route::get('/rent', function () {
    return view('rent');
});
Route::get('/personal_data', function () {
    return view('personal_data');
});
Route::get('/rent_book', function () {
    return view('rent_book');
});