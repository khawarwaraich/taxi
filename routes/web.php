<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'admin','as' => 'admin:'], function () {

Route::get('login', ['as' => 'login', 'uses' => 'AdminAuthController@index']);
Route::post('auth', ['as' => 'login.auth', 'uses' => 'AdminAuthController@login_auth']);

});

Route::group(['prefix' => 'admin','middleware' => ['admin.auth'],'as' => 'admin:'], function () {

  Route::get('/dashboard', ['as' => 'home', 'uses' => 'HomeController@index']);
  Route::any('logout', ['as' => 'logout', 'uses' => 'AdminAuthController@logout']);

  //Profile Routes (Admin)
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);


  //Users Routes
  Route::get('users', ['as' => 'users', 'uses' => 'UserController@index']);
  Route::get('users/create', ['as' => 'user.create', 'uses' => 'UserController@create']);
  Route::post('users/add', ['as' => 'user.add', 'uses' => 'UserController@store']);
  Route::any('users/update/{id}', ['as' => 'user.update', 'uses' => 'UserController@store']);
  Route::get('users/edit/{id}', ['as' => 'user.edit', 'uses' => 'UserController@edit']);
  Route::post('users/change_status', ['as' => 'user.status', 'uses' => 'UserController@change_status']);
  Route::post('users/delete_image', ['as' => 'user.image.delete', 'uses' => 'UserController@delete_user_image']);

  //Settings
  Route::get('settings', ['as' => 'settings', 'uses' => 'SettingsController@index']);
  Route::post('settings/add-uploads', ['as' => 'settings.add-uploads', 'uses' => 'SettingsController@store_images']);
  Route::any('settings/update-uploads/{id}', ['as' => 'settings.update-uploads', 'uses' => 'SettingsController@store_images']);


    //Categories
    Route::get('categories', ['as' => 'categories', 'uses' => 'CatagoriesController@index']);
    Route::get('categories/create', ['as' => 'categories.create', 'uses' => 'CatagoriesController@create']);
    Route::any('categories/add', ['as' => 'categories.add', 'uses' => 'CatagoriesController@store']);
    Route::any('categories/update/{id}', ['as' => 'categories.update', 'uses' => 'CatagoriesController@store']);
    Route::get('categories/edit/{id}', ['as' => 'categories.edit', 'uses' => 'CatagoriesController@edit']);
    Route::post('categories/change_status', ['as' => 'categories.status', 'uses' => 'CatagoriesController@change_status']);
    Route::get('categories/destroy/{id}', ['as' => 'categories.destroy', 'uses' => 'CategoriesController@destroy']);


    //Bookings
    Route::get('bookings', ['as' => 'bookings', 'uses' => 'BookingController@index']);
    Route::get('order/detail/{id}', ['as' => 'booking.detail', 'uses' => 'BookingController@orderDetail']);


});

///Front Routes
Route::get('/', ['as' => '/','uses' => 'HomeController@front']);
Route::get('/about', ['as' => 'about','uses' => 'HomeController@about']);
Route::get('/login', ['as' => 'login','uses' => 'HomeController@front_login']);
Route::get('/register', ['as' => 'register.customer','uses' => 'HomeController@register']);
Route::post('/front/login', ['as' => 'login.web','uses' => 'HomeController@auth']);
Route::get('/logout', ['as' => 'logout','uses' => 'HomeController@logout']);
Route::get('/payment-success', ['as' => 'payment-success','uses' => 'BookingController@payment_success']);
Route::get('/payment-error', ['as' => 'payment-error','uses' => 'BookingController@payment_error']);
Route::post('/front/register', ['as' => 'register.user','uses' => 'HomeController@registerUser']);
Route::any('/request-drive', ['as' => 'request-drive','uses' => 'RideController@requestDrive']);
Route::group(['middleware' => ['auth:web']], function () {
Route::get('/checkout', ['as' => 'checkout','uses' => 'BookingController@checkout']);
Route::post('/book-ride', ['as' => 'book-ride','uses' => 'BookingController@bookRide']);
Route::get('/stripe-checkout/{name}/{id}/{amount}', ['as' => 'stripe-checkout','uses' => 'BookingController@stripe_checkout']);
});
