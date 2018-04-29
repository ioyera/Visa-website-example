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

Auth::routes();

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('register', 'Auth\RegisterController@register');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin/login', 'Auth\AdminLoginController@index')->name('admin.login');



Route::get('edit&(id)', 'HomeController@edit')->name('edit');



Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Route::get('show', 'HomeController@show')

// Route::post('/login','Auth/LoginController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('index', 'projectController@index');

Route::post('store', 'projectController@store');
