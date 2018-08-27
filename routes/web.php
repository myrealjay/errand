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
    return view('enter');
});
Route::get('/faq', function () {
    return view('faq');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/customer/login', 'CustomersAuthController@getLogin');

Route::post('/customer/login', 'CustomersAuthController@postLogin');

Route::get('/customer/register', 'CustomersAuthController@getRegister');

Route::post('/customer/register', 'CustomersAuthController@postRegister');

Route::get('/dashboard','CustomersFrontController@dashboard')->name('dashboard');

Route::post('/customer-logout','CustomersFrontController@logout')->name('customer-logout');

Route::get('/customer-logout','CustomersFrontController@logout')->name('customer-logout');

Route::get('/customer/request','CustomersFrontController@getRequest');

Route::post('/customer/request','CustomersFrontController@postRequest');

Route::get('/customer/logs','CustomersFrontController@logs');

Route::get('/customer/track','CustomersFrontController@track');

Route::get('/customer/update','CustomersFrontController@update');

Route::post('/customer/update','CustomersFrontController@postUpdate');

Route::resource('users', 'UserController');

Route::resource('customerinfos', 'CustomerinfoController');

Route::resource('drivers', 'DriverController');