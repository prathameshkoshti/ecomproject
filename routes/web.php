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

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
	return view('about');
});

Route::get('/contact', function(){
	return view('contact');
});

Route::get('/book', function(){
	return view('book');
});

Route::put('/store', 'RegistrationsController@store');

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
	Route::group(array('prefix' => 'admin'),function(){

		Route::get('/', 'HomeController@index')->name('layouts.home');

		Route::group(array('prefix' => 'registrations'),function(){
			Route::get('/', 'RegistrationsController@index');

			Route::get('create', 'RegistrationsController@create');
			Route::put('store', 'RegistrationsController@store');

			Route::get('edit/{id}', 'RegistrationsController@edit');
			Route::put('update/{id}', 'RegistrationsController@update');

			Route::get('delete/{id}', 'RegistrationsController@delete');

		});
	});
});



