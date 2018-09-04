<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getdriver', 'APIPaymentController@getdriver');
Route::post('register', 'APIRegisterController@register');
Route::post('login', 'APILoginController@login');
Route::group(['middleware' => ['jwt.auth']], function() {
    Route::post('logout', 'APILoginController@logout');  //Logout
    Route::get('test', 'APIRegisterController@test'); //test
    Route::get('getuserinfo/{id}', 'APILoginController@getUserDetails');//get user info
    Route::put('customer/{id}', 'APILoginController@postUpdate'); //Update Customer info
    Route::post('getauthcode/{id}', 'APIPaymentController@getauthcode');
    Route::get('checkauthcode/{id}', 'APIPaymentController@checkauthcode');
});