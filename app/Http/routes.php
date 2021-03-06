<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', "StylesController@home")->name('home');
Route::get('/help', 'StylesController@help')->name('help');
Route::get('/about', "StylesController@about")->name('about');
Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');
Route::get('/test', 'UsersController@test');
Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');
Route::get('/users/{id}/edit', 'UsersController@edit')->name('users.edit');
Route::get('/users/{id}/edittest','UsersController@edittest')->name('users.edittest');
Route::put('/users/{id}/modify','UsersController@modify')->name('users.modify');
Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');
Route::get('password/email', 'Auth\PasswordController@getEmail')->name('password.reset');
Route::post('password/email', 'Auth\PasswordController@postEmail')->name('password.reset');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset')->name('password.edit');
Route::post('password/reset', 'Auth\PasswordController@postReset')->name('password.update');
//Route::post('/users/{id}/update', 'UsersController@update')->name('users.update');
// Route::get('/users', 'UsersController@index')->name('users.index');
//Route::get('/users/{id}/edit', 'UsersController@edit')->name('users.edit');
// Route::get('/users/{user}', 'UsersController@show')->name('users.show');
// Route::get('/users/create', 'UsersController@create')->name('users.create');
// Route::post('/store', 'UsersController@store')->name('users.store');
// Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
// Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
// Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');
// Route::post('/store', 'UsersController@store')->name('users.store');
