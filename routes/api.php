<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login', 'Api\AppAuthController@login');
Route::post('register', 'Api\AppAuthController@register');
Route::post('rider-register', 'Api\AppAuthController@Riderregister');
Route::post('rider-login', 'Api\AppAuthController@riderlogin');
Route::post('reset-password', 'Api\AppAuthController@sendResetLinkEmail');
Route::post('get-orders', 'Api\AppController@getOrders');
Route::post('save-token', 'Api\AppController@saveToken');
Route::post('profile-update', 'Api\AppAuthController@profileUpdate');


Route::middleware('auth:api')->group(function () {
    Route::get('get-data', 'Api\AppController@getData');
    Route::post('book-drive', 'BookingController@appBooking');
});
