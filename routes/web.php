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
Route::view('/', 'frontend.index')->name('main');
Route::view('/security', 'security')->name('security');

//Admin Dashboard
Route::get('dashboard', 'HomeController@index');

//Routes for files
Route::get('files/upload', 'FilesController@create')
	->name('file.create')
	->middleware('permission:file.create');


Route::post('files/upload', 'FilesController@store')
	->name('file.store')
	->middleware('permission:file.store');


Route::patch('files/delete/{id}', 'FilesController@delete')->name('file.delete');



//Routes for viewing files
Route::get('files/images', 'FilesController@images')
	->name('file.images')
	->middleware('permission:file.images');

Route::get('files/videos', 'FilesController@videos')
	->name('file.videos')
	->middleware('permission:file.videos');

Route::get('files/audios', 'FilesController@audios')
	->name('file.audios')
	->middleware('permission:file.audios');

Route::get('files/docs', 'FilesController@docs')
	->name('file.docs')
	->middleware('permission:file.docs');


//Routes for Roles
Route::get('roles', 'Admin\RolesController@index')->name('roles.index');
Route::get('roles/add', 'Admin\RolesController@create')->name('roles.create');
Route::patch('roles/add', 'Admin\RolesController@store')->name('roles.store');
Route::get('roles/edit/{id}', 'Admin\RolesController@edit')->name('roles.edit');
Route::get('roles/show/{id}', 'Admin\RolesController@show')->name('roles.show');
Route::patch('roles/update/{id}', 'Admin\RolesController@update')->name('roles.update');
Route::patch('roles/edit/{id}', 'Admin\RolesController@delete')->name('roles.delete');

//Routes for Permissions
Route::get('permission', 'Admin\PermissionsController@index')->name('permission.index');
Route::get('permission/add', 'Admin\PermissionsController@create')->name('permission.create');
Route::patch('permission/add', 'Admin\PermissionsController@store')->name('permission.store');
Route::get('permission/edit/{id}', 'Admin\PermissionsController@edit')->name('permission.edit');
Route::patch('permission/update/{id}', 'Admin\PermissionsController@update')->name('permission.update');
Route::patch('permission/edit/{id}', 'Admin\PermissionsController@delete')->name('permission.delete');

//Authentication Routes
Auth::routes();




