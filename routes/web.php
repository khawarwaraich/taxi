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

Route::group(['prefix' => 'admin','middleware' => ['auth'],'as' => 'admin:'], function () {

  Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);
  Route::any('logout', ['as' => 'logout', 'uses' => 'AdminAuthController@logout']);

  //Profile Routes (Admin)
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);


  //Users Routes
  Route::get('users', ['as' => 'users', 'uses' => 'UserController@index'])->middleware('permission:View Users');
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

});

///Front Routes
Route::get('/', ['uses' => 'HomeController@index']);
