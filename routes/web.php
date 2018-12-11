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

/*Route::get('/', function () {
    return view('frontend.index');
});*/


//Frontend Views
Route::view('/', 'index')->name('main');
Route::view('/security', 'security')->name('security');


//Authentication Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
