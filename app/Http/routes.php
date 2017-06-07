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
