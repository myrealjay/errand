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
    return view('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/customer/login', 'CustomersAuthController@getLogin');

Route::post('/customer/login', 'CustomersAuthController@postLogin');

Route::get('/customer/register', 'CustomersAuthController@getRegister');

Route::post('/customer/register', 'CustomersAuthController@postRegister');

Route::get('/dashboard','CustomerinfoController@dashboard')->name('dashboard');

Route::post('/customer-logout','CustomerinfoController@logout')->name('customer-logout');

Route::get('/customer-logout','CustomerinfoController@logout')->name('customer-logout');

Route::get('/customer/request','CustomerinfoController@getRequest');

Route::post('/customer/request','CustomerinfoController@postRequest');

Route::get('/customer/logs','CustomerinfoController@logs');

Route::get('/customer/track','CustomerinfoController@track');