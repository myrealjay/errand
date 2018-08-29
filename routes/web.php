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

Route::get('/test', function () {
    return view('test');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/google', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/tested', function () {
    return view('tests');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/customer/login', 'CustomersAuthController@getLogin');

Route::post('/customer/login', 'CustomersAuthController@postLogin'); 

Route::post('/estimate', 'CustomersAuthController@postRequest');

Route::get('/customer/register', 'CustomersAuthController@getRegister');

Route::post('/customer/register', 'CustomersAuthController@postRegister');  

Route::get('/dashboard','CustomersFrontController@dashboard')->name('dashboard');

Route::post('/customer-logout','CustomersFrontController@logout')->name('customer-logout');

Route::get('/customer-logout','CustomersFrontController@logout')->name('customer-logout');

Route::get('/customer/request','CustomersFrontController@getRequest');

Route::get('/singleway','CustomersFrontController@singleway');

Route::get('/multiway','CustomersFrontController@multiway');

Route::post('/customer/request','CustomersFrontController@postRequest');

Route::get('/customer/logs','CustomersFrontController@logs');

Route::get('/customer/track','CustomersFrontController@track');

Route::get('/customer/update','CustomersFrontController@update');

Route::post('/customer/update','CustomersFrontController@postUpdate');

Route::post('/customer/post','CustomersFrontController@postUpdate');

Route::resource('users', 'UserController');

Route::resource('customerinfos', 'CustomerinfoController');

Route::resource('drivers', 'DriverController');

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay'); //Paystack payment

Route::get('/payment/callback', 'PaymentController@handleGatewayCallback'); //Paystack Payment

Route::post('/payviacode', 'PaymentController@payViaCode')->name('paycode'); //Paystack Authorization code

////////////////////////////////////////////////////////////////////////////////
                 //      DRIVER'S ROUTES               //
///////////////////////////////////////////////////////////////////////////////
Route::get('/driver/login', 'DriversAuthController@getLogin');

Route::post('/driver/login', 'DriversAuthController@postLogin'); 

Route::get('/driver/register', 'DriversAuthController@getRegister');

Route::post('/driver-logout','DriversFrontController@logout')->name('driver-logout');

Route::get('/driver-logout','DriversFrontController@logout')->name('driver-logout');

Route::get('/driver/dashboard','DriversFrontController@dashboard')->name('driverboard');

Route::get('/driver/current','DriversFrontController@track');

Route::get('/complete/{orderID}','DriversFrontController@updateTracker');

Route::get('/driver/logs','DriversFrontController@logs');

Route::get('/driver/profile','DriversFrontController@profile');