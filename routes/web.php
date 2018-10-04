<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|UserController
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::resource('/patient','PatientController');

Route::resource('/user','UserController');

Route::get('/Home', 'HomeController@index')->name('home');

Route::get('/public/{public}','HomeController@index');

Route::get('/admin/{admin}','HomeController@admins');


Route::get('/count','HomeController@count');

Route::get('/{ln}', function ($ln) {
    return 'undifen page '.$ln;
});