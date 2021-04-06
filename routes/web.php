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
Route::get('/genre', 'GenreController@index');

Route::get('/rent', 'RentController@index');
Route::get('/personal_data', 'Personal_DataController@index');
Route::get('/personal_data/create', 'Personal_DataController@create');
Route::post('/store', 'Personal_DataController@store');
Route::get('/rent_book', function () {
    return view('rent_book');
});